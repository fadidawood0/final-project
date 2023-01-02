<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\View as FacadesView;

class HomeController extends Controller
{
  public function index(){
return view('pages.index');
  }
  
  public function show($name){
   
        return view("pages.$name");
  }
  
}
