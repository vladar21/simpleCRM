<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Call;

class SecondController extends Controller
{
    public function add($id)
    {
        $call = new Call;
        $call->user_id = $id;
        $call->save();
        $calls = Call::where('user_id', '=', $id)->get();        
        return view('history.index')->with('calls', $calls); 
    }
}
