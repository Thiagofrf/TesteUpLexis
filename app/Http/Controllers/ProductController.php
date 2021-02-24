<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigos;

class ProductController extends Controller
{
    public function index(){
        $products = Artigos::all();
        return view('products',compact('products'));
    }

    public function show (Request $request){
        $request = $request->products;
        return view('/product/{products}');
        
    }

    public function store(){
        $data = [
            'ano' => request('ano'),
            'quilometragem' => request('quilometragem'),
            'combustivel' => request('combustivel'),
            'cambio' => request('cambio'),
            'portas' => request('portas'),
            'cor' => request('cor'),
            'preco' => request('preco')
            ];
            Artigos::create($data);
            return redirect('product');
            
    }
}
