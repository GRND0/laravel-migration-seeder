<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index() {
        $treni = Train::all();
        return view('treni', compact('treni'));
    }
}
