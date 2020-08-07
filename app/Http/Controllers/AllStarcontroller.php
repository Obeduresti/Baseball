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

        public function Delete($id){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $collection = $collection->find();
        $AllStar = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('Admin.AllStar.delete',[ "AllStar" => $AllStar ]);
     }

     public Function Remove(){
        $collection = (new MongoDB\Client)->Baseball->AllStar;
        $playerID= request('playerID');
        $collection = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request(""))
        ]);
        if($deleteOneResult-> getDeletedCount() == 1)
        return redirect("/admin/AllStar")->with("msg",$playerID."Was delete succesfuly.")->with("alerttype", "success");
       }


        public function edit($id){
            $collection = (new MongoDB\Client)->Baseball->AllStar;
            $collection = $collection->find();
            $AllStar = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('Admin.AllStar.edit',[ "AllStar" => $AllStar ]);
        }

        
   public function Update() {
    $collection = (new MongoDB\Client)->Baseball->AllStar;
    $AllStar = [
        "product_name" => request("product_name"),
        "category_id" => request("category"),
        "description" => request("description"),
        "price" => request("price"),
        "currency" => request("currency"),
        "specification"=> [],
        "rating"=>[],
        "comments"=>[]
    ];
    $updateOneResult = $collection->updateOne([
        "_id" => new \MongoDB\BSON\ObjectId(request("playerID"))
    ],[
        '$set' =>$AllStar
    ]);
    if($updateOneResult->getModifiedCount()== 1)
    return redirect("/admin/AllStar/". request("playerID"))->with('msg',"Updated succesfuly.")->with("alerttype", "success");
   }

}