<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::where('departure_date', '>=', Carbon::today())->get();
        // dd($trains);
        $data= ['trains' => $trains];
        return view('home', $data);
        
    }
    public function show(Train $train)
    {
        return view('show', compact('train'));
    }
    // public function newTrain()
    // {
    //     $train = new Train();
    //     $train->fill([
    //         'company' => 'Italo',
    //         'departure_station' => 'Anzio',
    //         'departure_date' => '2022-02-18',
    //         'departure_hours' => '15:00:00',
    //         'arrival_station' => 'Roma Termini',
    //         'arrival_date' => '2022-02-18',
    //         'arrival_hours' => '16:10:00',
    //         'code' => 'TR 1234',
    //         'carriages' => '7',
    //         'in_time' => 1,
    //         'deleted' => 0,
    //     ]);
    //     $result = $train->save();
    //     dd($result, $train);
    // }
}
