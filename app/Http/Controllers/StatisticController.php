<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Success;
use App\Models\Seizure;

class StatisticController extends Controller
{
    public function index()
    {
        return view('statistic');
    }

    public function seizure_export(Request $request)
    {
        $date1    = $request->date1;
        $date2    = $request->date2;
        $seizures = Seizure::whereBetween('date', [$date1, $date2])->get();
        return view('seizure_export',compact('seizures'));
    }

    public function success_export(Request $request)
    {
        $date1     = $request->date1;
        $date2     = $request->date2;
        $successes = Success::whereBetween('date', [$date1, $date2])->get();
        return view('success_export',compact('successes'));
    }

}
