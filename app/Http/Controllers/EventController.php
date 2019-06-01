<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    public function find(Request $request)
    {
        $view = null;
        $data['error'] = 1;
        $consulta = $request->input('busqueda');


        $results = DB::select("SELECT * FROM `events`
                                    WHERE name LIKE '%{$consulta}%'");
        if(isset($results)){
            $data['error'] = 0;

            $view = $this->drawContainer($results);
        }    

        echo json_encode($view);
    }

    public function drawContainer($results){
        if($results){
            $html = '<div class="row" >';
            foreach($results as $result){
                $html .= '<div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/img/fotos/2.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'.$result->name.'</h5>
                                <p class="card-text">'.$result->fecha.'</p>
                                <a href="/event/'.$result->id.'" class="btn btn-warning">Ver más</a>
                            </div>
                            </div>
                        </div>';
            }
            $html .= '</div>';
        }else{
            $html = 'No se encontraron resultados.';
        }
        

        return $html;
    }

    
}
