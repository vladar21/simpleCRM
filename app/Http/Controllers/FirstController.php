<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Call;

class FirstController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('list.index')->with('users', $users);
    }
    public function show($id)
    {        
        $calls = Call::where('user_id', '=', $id)->get();        
        return view('history.index')->with('calls', $calls);
    }
    public function add(Request $request)
    {
        dd($request->user_id);
    }

}
