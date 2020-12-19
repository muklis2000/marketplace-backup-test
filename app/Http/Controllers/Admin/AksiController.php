<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

use App\Http\Requests\Admin\AksiRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aksi;

class AksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Aksi::query();

            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-aksi dropdown-toggle mr-1 mb-1"
                                type="button"
                                data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('aksi.edit', $item->id) . '">
                                    Sunting
                                </a>
                                <form action="'. route('aksi.destroy', $item->id) .'" method="POST" onsubmit="return confirm(ConfirmDelete())">
                                ' . method_field('delete') . csrf_field() .'
                                <button type="submit" class="dropdown-item text-danger">
                                    Hapus
                                </button>
                                </form>
                            </div> 
                        </div>
                    </div>
                ';
            })
            ->editColumn('photo', function($item) {
                return $item->photo ? '<img src="'. Storage::url($item->photo) .'" style="max-height: 40px;" />' : '';
            })
            ->rawColumns(['action','photo'])
            ->make();
        }
        return view('pages.admin.aksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.aksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AksiRequest $request)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/aksi', 'public');

        Aksi::create($data);

        alert()->success('Success','Data Berhasil Ditambahkan.');


        return redirect()->route('aksi.index');
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
        $item = Aksi::findOrFail($id);

        return view('pages.admin.aksi.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AksiRequest $request, $id)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/aksi', 'public');

        $item = Aksi::findOrFail($id);

        $item->update($data);

        alert()->success('Success','Data Berhasil Diubah.');


        return redirect()->route('aksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Aksi::findOrFail($id);
        $item->delete();

        alert()->success('Success','Data Berhasil Dihapus.');


        return redirect()->route('aksi.index');
    }
}
