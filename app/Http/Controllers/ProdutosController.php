<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return view('ecommerce/produtos');
    }

    public function detail($id){
        return view("ecommerce/produtos: ".$id);
    }
}
