<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrisionalUnity;
use App\Models\Sector;
use App\Models\Faction;
use App\Models\Coordination;
use App\Models\Regime;
use App\Models\Success;

class SuccessController extends Controller
{
    public function index()
    {
        $prisionalUnities = PrisionalUnity::all();
        $sectors          = Sector::all();
        $factions         = Faction::all();
        $coordinations    = Coordination::all();
        $regimes          = Regime::all();
        return view('success',compact('prisionalUnities','sectors','factions','coordinations','regimes'));
    }

    public function store(Request $request)
    {
        Success::create($request->all());
        return back()->with('success','O êxito foi cadastrado!');
    }

    public function edit(Success $success)
    {
        return view('success_edit', compact('success'));
    }

    public function update(Request $request, Success $success)
    {
        // dd($request->only('ro_number', 'seal_number', 'dynamics_of_fact'));
        $data = $request->only('ro_number', 'seal_number', 'dynamics_of_fact');
        Success::find($success->id)->update($data);
        return to_route('search.index')->with('success','O êxito foi editado!');
    }


}
