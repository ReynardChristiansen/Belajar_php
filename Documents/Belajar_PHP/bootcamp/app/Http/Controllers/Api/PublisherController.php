<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\Validator;

class PublisherController extends Controller
{
    //
    public function index(){
        $publishers = Publisher::all();

        if($publishers->count() > 0){
            return response()->json([
                "status" => '200',
                "publishers" => $publishers
            ],200);
        }
        else{
            return response()->json([
                "status" => '404',
                "error_message" => 'Publisher Not Found'
            ],404);
        }
        
    }

    public function create(Request $request){
        $validate = Validator::make($request->all(), [
            'publisherName' =>'required'
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => '422',
                "error_message" => 'Publisher Not Found'
            ], 422);
        }
        else{
            Publisher::create([
                'publisherName' => $request->publisherName
            ]);
            return response()->json([
                "status" => '200',
                "message" => 'publisher has been create'
            ],200);
        }

    }

    public function show($id){
        $publisher = Publisher::find($id);

        if($publisher){
            return response()->json([
                "status" => '200',
                "publisherName" => $publisher
            ],200);
        }
        else{
            return response()->json([
                "status" => '404',
                "error_message" => 'Publisher Not Found'
            ],404);
        }
    }

    public function edit($id){
        $publisher = Publisher::find($id);

        if($publisher){
            return response()->json([
                "status" => '200',
                "publisherName" => $publisher
            ],200);
        }
        else{
            return response()->json([
                "status" => '404',
                "error_message" => 'Publisher Not Found'
            ],404);
        }
    }

    public function updates($id, Request $request){
        $validate = Validator::make($request->all(), [
            'publisherName' =>'required'
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => '404',
                "error_message" => 'bego lu'
            ], 422);
        }
        

        $publisher = Publisher::find($id);
        
        if($publisher){
            $publisher->update([
                "publisherName" => $request->publisherName
            ]);

            return response()->json([
                "status" => '200',
                "publisherName" => $request->publisherName
            ],200);
        }
        else{
            return response()->json([
                "status" => '404',
                "error_message" => 'Publisher Not Found'
            ],404);
        }
    }

    public function deletes($id){
        $publisher = Publisher::find($id);

        if($publisher){
            Publisher::destroy($id);
            return response()->json([
                "status" => '200',
                "error_message" => 'Publisher has been deleted'
            ],200);
        }
        else{
            return response()->json([
                "status" => '404',
                "error_message" => 'Publisher Not Found'
            ], 404);
        }

    }
}
