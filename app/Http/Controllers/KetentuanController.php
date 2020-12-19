<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sosial;
class KetentuanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();

        return view('pages.ketentuan',[
            'categories' => $categories,
            'sosials' => $sosials
        ]);
    }
}
