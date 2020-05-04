<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Client;

class ClientController extends Controller
{
    public function store(Request $request){
        // $client = Client::where(['phone' => $request->phone])->get();
        // if(!$client){ }else{
        //     return response()->json([
        //         'status' => true
        //     ]);
        // }
            DB::beginTransaction();
            try{
                Client::firstOrCreate([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
                DB::commit();
                return response()->json([
                    'success' => true,
                    'status' => 'Added Successfuly'
                ]);
            }catch( Exception $e){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'error_info' => $e
                ]);
            }
            DB::endTransaction();
       
    }

    public function index(){
        return view('index');
    }

    public function join(){
        return view('join');
    }
}
