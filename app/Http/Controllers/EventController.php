<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $x = 5;
        $y = 6;
        $z = $x + $y;
        $arrDados = ['Eliseu', 'Maíra', 'Hillary', 'Lorena'];
        return view('welcome', [
            'x' => $x, 
            'y' => $y, 
            'z' => $z, 
            'arrDados' => $arrDados
        ]);
    }
    public function create(){
        return view('events.create');
    }
}
