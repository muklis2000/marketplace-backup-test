<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Sosial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
        $carts = Cart::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
        $cart = Cart::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
        
        return view('pages.cart',[
            'carts' => $carts,
            'cart' => $cart,
            'categories' => $categories,
            'sosials' => $sosials
        ]);

    }

    public function delete(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        alert()->success('Success','Data Berhasil Dihapus.');

        return redirect()->route('cart');
    }
    
    public function success()
    {
        return view('pages.success');
    }
}
