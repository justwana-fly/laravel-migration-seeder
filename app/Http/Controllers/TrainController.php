<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('Orario_di_partenza', Carbon::today())->get();
        return view('home', compact('trains'));
    }
}
