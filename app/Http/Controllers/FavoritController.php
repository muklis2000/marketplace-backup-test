<?php

namespace App\Http\Controllers;

use App\Favorit;
use App\Category;
use App\Sosial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritController extends Controller
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
        $favorit = Favorit::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
        $favorits = Favorit::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
        
        return view('pages.favorit',[
            'favorit' => $favorit,
            'favorits' => $favorits,
            'categories' => $categories,
            'sosials' => $sosials
        ]);

    }

    public function delete(Request $request, $id)
    {
        $favorit = Favorit::findOrFail($id);

        $favorit->delete();

        alert()->success('Success','Data Berhasil Dihapus.');

        return redirect()->route('favorit');
    }
    
    public function success()
    {
        return view('pages.success');
    }
}
