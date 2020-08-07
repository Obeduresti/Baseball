<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SalaryController extends Controller
{
    
   public function index(){
        $collection =(new MongoDB\Client)->Baseball->Salary;
        $Salary = $collection->find();
        return view('Admin.Salary.index', [ "Salary" => $Salary ]);
   }
}