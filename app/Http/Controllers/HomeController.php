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
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home');
    }
}
