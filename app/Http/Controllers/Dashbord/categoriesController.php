<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
   public function index(){
$categories=DB::table('categories')->get();
return view('dashbord.categories.index',[
    'categories' => $categories,
]);
   }
}
