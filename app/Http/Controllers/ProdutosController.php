<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    private $totalPage = 5;

    public function index(){
        $produtos = Produto::paginate($this->totalPage);
        return view('products', compact('produtos'));
    }

    public function store(Request $request){
        Produto::create($request->all());
        $produtos = Produto::paginate($this->totalPage);
        return view('products', compact('produtos'));        
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('product', compact('produto'));
    }

    public function update(Request $request, $id){
        $model = Produto::findOrFail($id);
        $model->update($request->all());
        $produtos = Produto::paginate($this->totalPage);
        return view('products', compact('produtos'));
    }

    public function destroy($id){
        $model = Produto::findOrFail($id);
        $model->delete(); 
        $produtos = Produto::paginate($this->totalPage);
        return view('products', compact('produtos'));  
    }
}
