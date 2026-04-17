<?php

namespace App\Http\Controllers;

abstract class Controller{
    public function procesar(Request $request){

        return view('exito');
    }
}
