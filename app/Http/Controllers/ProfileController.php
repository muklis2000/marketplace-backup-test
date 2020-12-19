<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Sosial;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sosials = Sosial::all();
        $categories = Category::all();
        $users = User::all();
        $products = Product::with(['galleries'])->latest()->paginate(24);

        return view('pages.profile',[
            'categories' => $categories,
            'products' => $products,
            'sosials' => $sosials,
            'users' => $users
        ]);
    }
}
