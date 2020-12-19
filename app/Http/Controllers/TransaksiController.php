<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sosial;
use Barryvdh\DomPDF\Facade as PDF;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $buyTransactions = TransactionDetail::with(['transaction.user','product.galleries'])
                            ->whereHas('transaction', function($transaction){
                                $transaction->where('users_id', Auth::user()->id);
                            })->get();

        $sosials = Sosial::all();
        $categories = Category::take(6)->get();

        return view('pages.riwayat-transaksi',[
            'buyTransactions' => $buyTransactions,
            'categories' => $categories,
            'sosials' => $sosials
        ]);
    }

    public function details(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user','product.galleries'])
        ->whereHas('transaction', function($transaction)
        {
            $transaction->where('users_id', Auth::user()->id);
        })
        ->findOrFail($id);
        

        $sosials = Sosial::all();
        $categories = Category::take(6)->get();

        return view('pages.riwayat-transaksi-detail',[
            'transaction' => $transaction,
            'categories' => $categories,
            'sosials' => $sosials,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = TransactionDetail::findOrFail($id);

        $item->update($data);

        return redirect()->route('riwayat-transaksi-detail', $id);
    }

    public function cetak_pdf(Request $request, $id)
    {
    	$buyTransactions = TransactionDetail::with(['transaction.user','product.galleries'])
        ->whereHas('transaction', function($transaction)
        {
            $transaction->where('users_id', Auth::user()->id);
        })
        ->findOrFail($id);


        $pdf = PDF::loadview('pages.transaksi_pdf',['buyTransactions'=>$buyTransactions]);

        return $pdf->download('laporan-transaksi.pdf');
        
    }

}
