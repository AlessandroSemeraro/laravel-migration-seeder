<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        //prendo modello train e chiamo metodo statico all e salvalo in trains
       $trains=Train::all();
        
        return view('guest.train.index',compact('trains'));
    }
}
