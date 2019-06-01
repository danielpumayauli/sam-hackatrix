<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $events = DB::table('events')->select('name')->get();
        return view('home',compact('events'));
    }
}
