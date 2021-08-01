<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use function Symfony\Component\Translation\t;

class Desafio1Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, $id = null)
    {
        $boleta = Invoice::all();

        $productos = Product::all();

        $total = 0;
        if (null !== $id){
           $resultado = DB::table('products')->where('invoice_id', $id)->get();
           foreach ($resultado as $item){

                $aux = $item->quantity * $item->price;
                $total = $aux + $total;
           }
        }

        return view('desafio1', compact('boleta','productos', 'total', 'id'));

    }
}
