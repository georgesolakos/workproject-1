<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyages;

class ApiController extends Controller
{
    public function create(Request $request){
        $voy = new Voyages();
        $voy ->ship_id =$request->input('ship_id');
        $voy ->code =$request->input('code');
        $voy ->start =$request->input('start');
        $voy ->finish =$request->input('finish');
        $voy ->status =$request->input('status');
        $voy ->income =$request->input('income');
        $voy ->expenses =$request->input('expenses');
        $voy->kerdos = $request->input('income') - $request->input('expenses');
        $voy->save();
        return response()->json($voy);
    }

    public function show(){
        $voy = Voyages::all();
        return response()->json($voy);
    }

    public function edit(Request $request,$id){
        $voy = Voyages::find($id);
        $voy ->start =$request->input('start');
        $voy ->finish =$request->input('finish');
        $voy ->status =$request->input('status');
        $voy ->income =$request->input('income');
        $voy ->expenses =$request->input('expenses');
        $voy->kerdos = $request->input('income') - $request->input('expenses');
        $voy->save();
        return response()->json($voy);
    }
}
