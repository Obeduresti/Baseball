<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class ManagerController extends Controller
{
    
   public function index(){
        $collection =(new MongoDB\Client)->Baseball->Managers;
        $Managers = $collection->find();
        return view('Admin.Managers.index', [ "Managers" => $Managers ]);
   }


}