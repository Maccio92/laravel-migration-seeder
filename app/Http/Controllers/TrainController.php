<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::where('departure_hours', ' 14:00:00')->get();
        // dd($trains);
        $data= ['trains' => $trains];
        return view('home', $data);
        
    }
}
