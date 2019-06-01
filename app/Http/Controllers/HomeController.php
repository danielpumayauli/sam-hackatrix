<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $events = DB::select("SELECT * FROM events ORDER BY fecha ASC LIMIT 4");
        return view('home',compact('events'));
    }
}
