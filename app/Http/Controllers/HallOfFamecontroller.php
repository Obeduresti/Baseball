<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class HallOfFameController extends Controller
{
    
   public function index(){
        $collection =(new MongoDB\Client)->Baseball->HallOfFame;
        $HallOfFame = $collection->find();
        return view('Admin.HallOfFame.index', [ "HallOfFame" => $HallOfFame ]);
   }


}