<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Client;
use DataTables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $clients = Client::orderBy('name')->get();
    //     return $clients;
    //     return view('home',['clients' => $clients]);
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<button type="button" data-id="'.$row->id.'" class="edit btn btn-primary btn-sm">Edit</button> <button type="button" data-id="'.$row->id.'" class="edit btn btn-primary btn-sm">Delete</button>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home');
    }

    public function details(Request $request){
        // return $request;
        if($request->id){
            $info = Client::where([ 'id' => $request->id])->first();
            return response()->json([
                'user_data' => $info,
            ],200);
        }
    }

    public function update(Request $request){
        try{
            DB::beginTransaction();
            $user = Client::update([
                'id' => $request->id
            ] , [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'mm_id' => $request->mm_id,
                'wallet_id' => $request->wallet_id
            ]);
            DB::commit();
            return response()->json([
                'success' => true,
            ],200);
        }catch( Exception $e){
            DB::rollback();
            return response()->json([
                'success' => false,
                'error_info' => $e
            ],405);
        }
    }
}
