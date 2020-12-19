<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Iklan;
use App\Aksi;
use App\Sosial;
use App\Blog;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sosials = Sosial::all();
        $iklans = Iklan::take(3)->get();
        $aksi = Aksi::all();
        $categories = Category::take(6)->latest()->get();
        $categories_home = Category::all();
        $products = Product::with(['galleries'])->take(8)->latest()->get();
        $blog = Blog::take(3)
                ->orderBy('id', 'desc') 
                ->get();


        return view('pages.home',[
            'categories' => $categories,
            'categories_home' => $categories_home,
            'products' => $products,
            'iklans' => $iklans,
            'aksi' => $aksi,
            'sosials' => $sosials,
            'blog' => $blog,
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $products = Product::with(['galleries'])->take(8)
                    ->latest()
                    ->where('name', 'like', "%".$cari."%")
                    ->get();


        $sosials = Sosial::all();
        $aksi = Aksi::all();
        $iklans = Iklan::take(3)->get();
        $categories = Category::take(6)->latest()->get();
        $categories_home = Category::all();
        $products_today = Product::with(['galleries'])->take(8)->whereDate('created_at', Carbon::today())->get();
        $blog = Blog::take(3)
                ->orderBy('id', 'desc') 
                ->get();


        return view('pages.home',[
            'categories' => $categories,
            'categories_home' => $categories_home,
            'products' => $products,
            'products_today' => $products_today,
            'iklans' => $iklans,
            'aksi' => $aksi,
            'sosials' => $sosials,
            'blog' => $blog,
        ]);
    }
}
