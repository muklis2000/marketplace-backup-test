<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>

    h5{
      margin-top: -10px;
      color: #03AC0E;
    }
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 14px;
        line-height: 28px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #25282B;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: 24px; /* inherit */
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #25282B;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #d7f0d9;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body onload="window.print()">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h5>Tokokoi</h5>
                            </td>
                            
                            <td>
                                Invoice : <strong>#{{ $buyTransactions->transaction->code }}</strong><br>
                                {{ $buyTransactions->transaction->created_at }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <strong>PENERIMA</strong><br>
                                {{ $buyTransactions->transaction->user->name }}<br>
                                {{ $buyTransactions->transaction->user->phone_number }}<br>
                                {{ $buyTransactions->transaction->user->address_one }}<br>
                                {{ $buyTransactions->transaction->user->address_two }}, {{ $buyTransactions->transaction->user->zip_code }}<br>
                            </td>
                            
                            <td>
                                <strong>PENGIRIM</strong><br>
                                {{ $buyTransactions->product->user->name }}<br>
                                {{ $buyTransactions->product->user->store_name }}
                                {{ $buyTransactions->product->user->phone_number }}<br>
                                {{ $buyTransactions->product->user->address_one }}<br>
                                {{ $buyTransactions->product->user->address_two }}, , {{ $buyTransactions->product->user->zip_code }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>Produk</td>
                <td>Subtotal</td>
            </tr>

            <tr class="item">
                <td>
                    {{ $buyTransactions->product->name }}<br>
                </td>
                <td>Rp. {{ number_format($buyTransactions->transaction->total_price) }}</td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>
                   Subtotal: Rp. {{ number_format($buyTransactions->transaction->total_price) }}
                </td>
            </tr>

            <tr class="total">
                <td></td>
                <td>
                   Pembayaran: Rp. -
                </td>
            </tr>
            <tr>
                <td><strong>Detail Pembayaran</strong></td>
                <td></td>
            </tr>
            <tr>
                <td>Motode Pembayaran : Gopay</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor Transaksi : 123xxxx1213</td>
                <td></td>
            </tr>
            <tr>
                <td>Tanggal: 29 November 2020</td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>
