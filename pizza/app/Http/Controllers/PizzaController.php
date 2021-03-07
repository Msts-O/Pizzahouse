<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function  index() {
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
        ];
        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }
    public function show() {
        return view ('details',['id'=> $id]);
    }

}
