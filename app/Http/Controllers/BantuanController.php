<?php

namespace App\Http\Controllers;
use App\Category;
use App\Sosial;
use App\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BantuanController extends Controller
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
        $categories = Category::take(6)->get();

        return view('pages.bantuan',[
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $help = DB::table('helps')
                ->where('topik', 'like', "%".$cari."%")
                ->get();

        $sosials = Sosial::all();
        $categories = Category::take(6)->get();

        return view('pages.bantuan',[
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        $help = Help::where('slug', $slug)->firstOrFail();

        return view('pages.bantuan-detail',[
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help,
        ]);
    }
}