<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Success;
use App\Models\PrisionalUnity;
use App\Models\Seizure;

class SearchController extends Controller
{
    public function index()
    {
        $prisionalUnities = PrisionalUnity::all();
        return view('search', compact('prisionalUnities'));
    }

    public function result(Request $request)
    {

     $prisionalUnities = PrisionalUnity::all();

     $seizures  = Seizure::where('prisional_unity_id',$request->prisional_unity_id)
                         ->where('date',$request->date)
                         ->get();
     $successes = Success::where('prisional_unity_id',$request->prisional_unity_id)
                         ->where('date',$request->date)
                         ->get();

     return view('search',compact('seizures','prisionalUnities','successes'));

    }

}
