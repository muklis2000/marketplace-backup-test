<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Sosial;

use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sosials = Sosial::all();
        $categories_new = Category::take(48)->latest()->get();
        $categories = Category::take(6)->get();
        $products = Product::with(['galleries'])->latest()->paginate(24);

        return view('pages.category',[
            'categories' => $categories,
            'categories_new' => $categories_new,
            'products' => $products,
            'sosials' => $sosials
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $products = Product::with(['galleries'])
                    ->where('name', 'like', "%".$cari."%")
                    ->latest()
                    ->paginate(24);

        $sosials = Sosial::all();
        $categories = Category::all();
        $categories_new = Category::take(48)->latest()->get();


        return view('pages.category',[
            'categories' => $categories,
            'categories_new' => $categories_new,
            'products' => $products,
            'sosials' => $sosials
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $categories_new = Category::take(48)->latest()->get();
        $sosials = Sosial::all();
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(24);

        return view('pages.category',[
            'categories' => $categories,
            'categories_new' => $categories_new,
            'products' => $products,
            'sosials' => $sosials
        ]);
    }
}
