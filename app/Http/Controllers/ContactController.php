<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Sosial;
use App\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $help = Help::all();
        $contact = Contact::all();
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        return view('pages.bantuan', [
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help,
            'contact' => $contact 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Contact::create($data);

        alert()->success('Success','Pesan Berhasil Dikirim.');

        $help = Help::all();
        $contact = Contact::all();
        $sosials = Sosial::all();
        $categories = Category::take(6)->get();
        return view('pages.bantuan', [
            'categories' => $categories,
            'sosials' => $sosials,
            'help' => $help,
            'contact' => $contact 
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
