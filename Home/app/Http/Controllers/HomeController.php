<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;

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
    public function index()
    {
        $messages = DB::select('select messages from messages');
        return view('home',['messages'=>$messages]);
    }
    public function store (Request $request)
    {
        var_dump($request->all());
        Message::create($request->all());
        return redirect ('/home');
    }
}
