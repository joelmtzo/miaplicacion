<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function productos()
    {
        $productos = Product::all();

        /*$productos = [
            ["nombre" => "Producto 1", "precio" => 10],
            ["nombre" => "Producto 3", "precio" => 30],
            ["nombre" => "Producto 5", "precio" => 50]
        ];*/

        return view('productos', compact('productos'));
    }
}
