<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index() {

        $trains = Train::where('data_arrivo', "2022-12-19")->get();
        
        return view('homepage', compact('trains'));

    }

}
