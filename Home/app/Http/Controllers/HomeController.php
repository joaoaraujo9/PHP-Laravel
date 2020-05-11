<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = DB::select('select * from messages');
        return view('home',['messages'=>$messages]);
    }
    
    public function store (Request $request)
    {
        Message::create($request->all());
        return redirect('/home');
    }
    
    public function delete($id)
    {
        DB::table('messages')->where('id', '=', $id)->delete();
        return redirect('/home');
    }
}
