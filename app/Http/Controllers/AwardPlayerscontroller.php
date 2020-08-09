<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class AwardPlayersController extends Controller
{
    
   public function index(){
        $collection =(new MongoDB\Client)->Baseball->AwardPlayers;
        $AwardPlayers = $collection->find();
        return view('Admin.AwardPlayers.index', [ "AwardPlayers" => $AwardPlayers ]);
   }
   public function AwardPlayersStore(){
      $collection =(new MongoDB\Client)->Baseball->AwardPlayers;
      $AwardPlayersCount = $collection->count();
      $page = request("pg") == 0 ? 1 : request("pg");
      $AwardPlayers = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]); 
      return view('AwardPlayers.index', [ "AwardPlayers" => $AwardPlayers, 'AwardPlayersCount'=>$AwardPlayersCount]);
     }

     public function AwardPlayersDetails($id){
      $collection = (new MongoDB\Client)->Baseball->AwardPlayers;
      $AwardPlayers = $collection->findOne([ "_id"=> new MongoDB\BSON\ObjectId($id) ]);
      return view("AwardPlayers.details", ["AwardPlayers" => $AwardPlayers]);
     }

}