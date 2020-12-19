<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdatePasswordRequest;
use App\Category;
use App\Product;
use App\Iklan;
use App\Aksi;
use App\Sosial;

class PasswordController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $sosials = Sosial::all();
        $iklans = Iklan::take(3)->get();
        $aksi = Aksi::all();
        $categories = Category::take(6)->get();
        $products = Product::with(['galleries'])->take(8)->get();

        return view('pages.edit',[
            'categories' => $categories,
            'products' => $products,
            'iklans' => $iklans,
            'aksi' => $aksi,
            'sosials' => $sosials
        ]);
    }

    /**
     * @param UpdatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        alert()->success('Success','Password Berhasil Diubah.');

        return redirect()->route('user.password.edit');
    }
}
