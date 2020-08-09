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

    public function show($id){//Details
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $AllStar = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
    return view ('Admin.AllStar.details', [ "AllStar" => $AllStar ]);
    }

        public function create(){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $AllStar = $collection->find();
        return view('Admin.AllStar.create',[ "AllStar"=> $AllStar ]);
        }

        public function edit($id){
            $collection = (new MongoDB\Client)->Baseball->AllStar;
            $AllStar = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('Admin.AllStar.edit',[ "AllStar" => $AllStar ]);
        }

        
   public function Update() {
    $collection = (new MongoDB\Client)->Baseball->AllStar;
    $AllStar = [
        "playerID" => request("playerID"),
        "yearID" => request("yearID"),
        "gameID" => request("gameID"),
        "teamID" => request("teamID"),
        "lgID" => request("lgID"),
    ];
    $updateOneResult = $collection->updateOne([
        "_id" => new \MongoDB\BSON\ObjectId(request("allstarid"))
    ],[
        '$set' =>$AllStar
    ]);
    if($updateOneResult->getModifiedCount()== 1)
    return redirect("/admin/AllStar/". request("allstarid"))->with('msg',"Updated succesfuly.")->with("alerttype", "success");
   }  
   
   public function Delete($id){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $AllStar = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('admin/AllStar.delete',[ "AllStar" => $AllStar]);
     }

     public Function Remove(){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("allstarid"))
        ]);
        if($deleteOneResult-> getDeletedCount() == 1)
        return redirect("admin/AllStar/")->with("mssg", request('playerID')." was deleted succesfuly.!")->with("alerttype", "success");
       }

       public function store() {
        $AllStar = [
            "playerID" => request("playerID"),
            "yearID" => request("yearID"),
            "gameID" => request("gameID"),
            "gameID" => request("gameID"),
            "lgID" => request("lgID"),

        ];
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $insertOneResult = $collection->insertOne($AllStar);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/AllStar')->with('mssg', request('playerID')." was added succesfuly!")-> with('alerttype', "success");
    }

    public function AllStarStore(){
        $collection =(new MongoDB\Client)->Baseball->AllStar;
        $AllStarCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $AllStar = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]); 
        return view('AllStar.index', [ "AllStar" => $AllStar, 'AllStarCount'=>$AllStarCount]);
       }

       public function AllStarDetails($id){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $AllStar = $collection->findOne([ "_id"=> new MongoDB\BSON\ObjectId($id) ]);
        return view("AllStar.details", ["AllStar" => $AllStar]);
       }
}