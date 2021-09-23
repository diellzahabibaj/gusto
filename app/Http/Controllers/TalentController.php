<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('isAdmin', ['except' => [ 'index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $talents = Talent::where('name', 'Mertie Jones V')->get();
        //$talents = Talent::all();
        return response()->json($talents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $talents = Talent::all();
        return response()->json($talents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talent = new Talent;
        $talent->name = $request->name;
        $talent->sector_id = $sector->id;
        $talent->role_id = $role->id;
        $talent->canton = $request->canton;
        
        $talent->save();
        return response()->json($talent);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $talent = Talent::findOrFail($id);
      return response()->json($talent);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $talent = Talent::find($id);
        $talent->name = $request->name;
        $talent->sector_id = $sector->id;
        $talent->role_id = $role->id;
        $talent->canton = $request->canton;
        
        $talent->save();
        return response()->json($talent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $talent = Talent::find($id);
        $talent->delete();
        return response()->json($talent);
    }
}
