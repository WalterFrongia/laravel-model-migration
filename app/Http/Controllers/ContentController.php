<?php

namespace App\Http\Controllers;

use App\Models\Travel;

class ContentController extends Controller
{
    public function index() {
        //inizializziamo e dichiariamo una variabile che richiama il model e aggiungiamo ::all per prendere tutti i dati del db con model. 
        $travel = Travel::all();
        // dd($travel); //serve per stampare array nel browers.

        //con data mandiamo i dati alla view e poi scriviamo il valore in return. 
        $data=[
            //serve chiamarlo al prurale per richiamarlo nel foreach(?)
            "travels" => $travel
        ];
        return view('content',$data);
    }
}
