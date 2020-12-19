<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\User;
use App\Banklist;
use App\Http\Requests\Admin\BankRequest;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DashboardBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) 
        {
            $query = Bank::with(['user','banklist'])
                    ->where('users_id', Auth::user()->id)
                    ->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-aksi dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('dashboard-banks-edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('dashboard-banks-delete', $item->id) . '" method="POST" onsubmit="return confirm(ConfirmDelete())">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.bank.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $banklist = Banklist::all();
        
        return view('pages.dashboard.bank.create',[
            'users' => $users,
            'banklist' => $banklist
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

        Bank::create($data);

        alert()->success('Success','Data Berhasil Ditambahkan.');

        return redirect()->route('dashboard-banks');
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
        $item = Bank::findOrFail($id);
        $users = User::all();
        $banklist = Banklist::all();

        return view('pages.dashboard.bank.edit',[
            'item' => $item,
            'users' => $users,
            'banklist' => $banklist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BankRequest $request, $id)
    {
        $data = $request->all();

        $item = Bank::findOrFail($id);

        $item->update($data);

        alert()->success('Success','Data Berhasil Diubah.');

        return redirect()->route('dashboard-banks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Bank::findorFail($id);
        $item->delete();

        alert()->success('Success','Data Berhasil Dihapus.');

        return redirect()->route('dashboard-banks');
    }
}
