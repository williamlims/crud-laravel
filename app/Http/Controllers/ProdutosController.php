<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //public function index(){
    //    return Produto::all();
    //}

    public function index(){
        $produtos = Produto::all();
        return view('products', compact('produtos'));
    }

    public function store(Request $request){
        Produto::create($request->all());
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('product', compact('produto'));
    }

    public function update(Request $request, $id){
        $model = Produto::findOrFail($id);
        $model->update($request->all());
    }

    public function destroy($id){
        $model = Produto::findOrFail($id);
        $model->delete();   
    }
}
