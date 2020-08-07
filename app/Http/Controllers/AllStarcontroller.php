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
        $collection = (new MongoDB\Client)->FiceCStore->Products;
        $collection = (new MongoDB\Client)->FiceCStore->categories;
        $collection = $collection->find();
        $products = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('Admin.Products.delete',[ "products" => $products, "categories"=> $categories ]);
     }
        public function edit($id){
            $collection = (new MongoDB\Client)->FiceCStore->Products;
            $collection = (new MongoDB\Client)->FiceCStore->categories;
            $collection = $collection->find();
            $products = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
            return view('Admin.Products.edit',[ "products" => $products, "categories"=> $categories ]);
        }

}