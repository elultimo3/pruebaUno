<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function products(){
        return view('admin.productos');
    }

    function users(){
        return view('admin.usuarios');
    }

    function software(){
        return view('admin.software');
    }
}
