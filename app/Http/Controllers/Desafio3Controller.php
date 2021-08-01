<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Desafio3Controller extends Controller
{
    private $total;

    public function index(Request $request)
    {
        $invoice_id = DB::table('invoices')->pluck('id')->toArray();
        $id = DB::table('products')->pluck('id')->last()+1;
        $total = DB::table('invoices')->pluck('total')->first();
        $this->total = $total;

        return view('desafio3', compact('invoice_id','id', 'total'));
    }

    public function insert(Request $request){
        $total = 0;
        $insertarData['id'] =  $request->input('id_product');
        $insertarData['invoice_id'] = $request->input('id_factura');
        $insertarData['name'] = $request->input('nombre_producto');
        $insertarData['quantity'] = $request->input('cantidad');
        $insertarData['price'] = $request->input('precio');

        DB::table('products')->insert($insertarData);

        return redirect('/desafio3');
    }
}
