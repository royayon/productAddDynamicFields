<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAdd as ProductAdd;

class ProductAddController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'prodname' => 'required|string',
            'prodprice' => 'required',
            'proddesc' => 'required',
        ]);

        /*
          Add mail functionality here.
        */
        $product = new ProductAdd();
        $product->prodname = $request->prodname;
        $product->proddesc = $request->proddesc;
        $product->prodprice = $request->prodprice;

        if($request->prodweight != null){
            $product->prodweight = $request->prodweight;
        } else {
            $product->prodweight = "";
        }


        $product->save();

        // return $product;

        return response()->json($product, 200);
    }
}
