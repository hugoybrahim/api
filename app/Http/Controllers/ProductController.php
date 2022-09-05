<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  private $data;

    public function __construct()
    {
            $this->data = file_get_contents('../resources/json/datatable.json');
    }

    public function index( Request $request )
    {
        $json = [];
        $message = 'Data Not Found';
        $data = json_decode( $this->data );
        foreach ( $data->products as $product ) {
            if ( ( $request->category && $product->category !== $request->category ) 
                ||  ( $request->price && $product->price !== (int)$request->price ) ) {
                continue;
            }

            $message = 'The data Was Found';
            $array['sku']   = $product->sku;
            $array['name']  = $product->name;
            $array['category']          = $product->category;
            $array['price']['original'] = $product->price;

            if ( $product->category === 'insurance' ) {
                $array['price']['final']                = round( $product->price * 0.70 );
                $array['price']['discount_percentage']  = '30%';
            } elseif ( $product->sku === '000003' ) {
                $array['price']['final']                = round( $product->price * 0.85 );
                $array['price']['discount_percentage']  = '15%';
            } else {
                $array['price']['final']                = $product->price;
                $array['price']['discount_percentage']  = null;
               

            }
            $array['price']['currency']             = 'EUR';
            $json [] = $array;
        }
        
        return response()->json( [
            'message' => $message,
            'data' => $json
            ] , 200);
    }

}
