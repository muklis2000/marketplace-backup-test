<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use App\Favorit;
use App\Sosial;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        $product = Product::with(['galleries','user','comments', 'comments.child'])->where('slug', $id)->firstOrFail();
        
        return view('pages.detail',[
            'product' => $product,
            'categories' => $categories,
            'sosials' => $sosials
        ]);
    }

    public function profile(Request $request, $name)
    {
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        $user = User::where('name', $name)->firstOrFail();

        // $products = Product::with(['galleries','user'])->take(8)
        //             ->where('user_id','id')
        //             ->get();
        $products = Product::with(['galleries','category'])
                        ->where('users_id', $user->id)            
                        ->get();
        

        return view('pages.profile',[
            'categories' => $categories,
            'products' => $products,
            'sosials' => $sosials,
            'user' => $user,
        ]);
    }

    public function profilesaya()
    {
        $sosials = Sosial::all();
        $user = Auth::user();
        $categories = Category::take(6)->get();
        $products = Product::with(['galleries','category'])
                        ->where('users_id', Auth::user()->id)
                        ->latest()            
                        ->get();
        
        // Urutan Harga termahal
        $termahal_products = Product::with(['galleries'])->take(8)
                    ->orderBy('price', 'desc')
                    ->where('users_id', Auth::user()->id)   
                    ->get();
        
        // Urutan Harga termahal
        $termurah_products = Product::with(['galleries'])->take(8)
                    ->orderBy('price', 'asc')
                    ->where('users_id', Auth::user()->id)   
                    ->get();

        return view('pages.profile-saya',[
            'categories' => $categories,
            'products' => $products,
            'user' => $user,
            'sosials' => $sosials,
            'termahal_products' => $termahal_products,
            'termurah_products' => $termurah_products,
        ]);
    }

    

    public function add(Request $request, $id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
        ];

        Cart::create($data);

        alert()->success('Success','Data Berhasil Ditambahkan Keranjang.');

        return redirect()->route('cart');
    }

    public function favorit(Request $request, $id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
        ];

        Favorit::create($data);

        return redirect()->route('favorit');
    }

    public function comment(Request $request)
    {
        //VALIDASI DATA YANG DITERIMA
        $this->validate($request, [
            'username' => 'required',
            'comment' => 'required'
        ]);

        Comment::create([
            'products_id' => $request->id,
            //JIKA PARENT ID TIDAK KOSONG, MAKA AKAN DISIMPAN IDNYA, SELAIN ITU NULL
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'username' => $request->username,
            'comment' => $request->comment
        ]);
        return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
    }
}
