<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    Public function index(){
        return view('artikel.index');
    }
  
    Public function create(){
        return view('artikel.create');
    }
    Public function home(){
        return view('artikel.home');
    }
    Public function detail(){
        return view('artikel.detail');
    }
}
