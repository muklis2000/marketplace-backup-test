<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sosial;
use App\Help;

class HelpController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $help = Help::all();
        $sosials = Sosial::all();
        $categories = Category::all();

        return view('pages.bantuan',[
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $sosials = Sosial::all();
        $helps = Help::all();
        $categories = Category::all();
        $help = Help::where('slug', $slug)->firstOrFail();

        return view('pages.bantuan-detail',[
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help,
        ]);
    }

}
