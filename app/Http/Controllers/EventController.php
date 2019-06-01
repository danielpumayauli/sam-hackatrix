<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    public function find(Request $request)
    {
        $data['msj'] = null;
        $data['error'] = 1;
        $consulta = $request->input('busqueda');


        $data['results'] = DB::select("SELECT * FROM `events`
                                    WHERE name LIKE '%{$consulta}%'");
        if(isset($data['results'])){
            $data['error'] = 0;
        }    

        echo json_encode($data);
    }

    
}
