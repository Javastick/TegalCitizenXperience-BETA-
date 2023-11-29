<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index(){
        return view('interface.index');
    }
    public function keder(){
        return view('keder.index');
    }
}
