<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    public function store()
    {
        $user = Auth::user();
        $categories = Category::all();

        return view('pages.dashboard-settings',[
            'user' => $user,
            'categories' => $categories
        ]);
    }

    public function account()
    {
        $user = Auth::user();

        return view('pages.dashboard-account',[
            'user' => $user,
        ]);
    }

    public function update(Request $request, $redirect)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');
        $item = Auth::user();

        $item->update($data);

        alert()->success('Success','Data Berhasil Diubah.');


        return redirect()->route($redirect);
    }

    public function update_store(Request $request, $redirect)
    {
        $data = $request->all();
        $item = Auth::user();

        $item->update($data);

        alert()->success('Success','Data Berhasil Diubah.');

        return redirect()->route($redirect);
    }
}
