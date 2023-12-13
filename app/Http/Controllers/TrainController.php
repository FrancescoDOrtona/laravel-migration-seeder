<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $today)
            ->where('in_orario', true)
            ->orderBy('orario_partenza')
            ->get();

        return view('home', compact('trains'));
    }

}
