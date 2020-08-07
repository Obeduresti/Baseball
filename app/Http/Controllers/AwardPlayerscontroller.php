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

}