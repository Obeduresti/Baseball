<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class AllStarController extends Controller
{
    
   public function index(){
        $collection =(new MongoDB\Client)->Baseball->AllStar;
        $AllStar = $collection->find();
        return view('Admin.AllStar.index', [ "AllStar" => $AllStar ]);
   }




   
}