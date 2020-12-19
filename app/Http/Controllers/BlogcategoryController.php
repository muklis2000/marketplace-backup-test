<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sosial;
use App\Blogcategory;
use App\Blog;

use Illuminate\Support\Facades\DB;

class BlogcategoryController extends Controller
{
    public function index()
    {
        $blogcategories = Blogcategory::all();
        $sosials = Sosial::all();
        $blog = Blog::take(12)->get();
        $categories = Category::take(6)->get();

        return view('pages.blogcategory',[
            'categories' => $categories,
            'blogcategories' => $blogcategories,
            'sosials' => $sosials,
            'blog' => $blog,
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $blog = Blog::with(['blogcategory'])
                    ->where('name', 'like', "%".$cari."%")
                    ->get();

        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        $blogcategories = Blogcategory::take(12)->get();

        return view('pages.blogcategory',[
            'categories' => $categories,
            'blogcategories' => $blogcategories,
            'sosials' => $sosials,
            'blog' => $blog
        ]);
    }


    public function detail(Request $request, $slug)
    {
        $blogcategories = Blogcategory::all();
        $blogcategory = Blogcategory::where('slug', $slug)->firstOrFail();
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();

        $blog = Blog::all()->where('blogcategories_id', $blogcategory->id);
                    

        return view('pages.blogcategory',[
            'categories' => $categories,
            'blogcategories' => $blogcategories,
            'sosials' => $sosials,
            'blog' => $blog
        ]);
    }
}
