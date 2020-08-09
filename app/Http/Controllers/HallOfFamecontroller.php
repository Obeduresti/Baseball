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

   public function AwardPlayersStore(){
      $collection =(new MongoDB\Client)->Baseball->HallOfFame;
      $HallOfFameCount = $collection->count();
      $page = request("pg") == 0 ? 1 : request("pg");
      $HallOfFame = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]); 
      return view('HallOfFame.index', [ "HallOfFame" => $HallOfFame, 'HallOfFameCount'=>$HallOfFameCount]);
     }

     public function AwardPlayersDetails($id){
      $collection = (new MongoDB\Client)->Baseball->HallOfFame;
      $HallOfFame = $collection->findOne([ "_id"=> new MongoDB\BSON\ObjectId($id) ]);
      return view("HallOfFame.details", ["HallOfFame" => $HallOfFame]);
     }

}