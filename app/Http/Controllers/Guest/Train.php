<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Train extends Controller
{
    //
    public function index() {

        $trains = Train::all();
        dd($trains);
        return view('homepage', compact('trains'));

    }

}
