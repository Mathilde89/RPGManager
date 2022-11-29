<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perso.personnage');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        // $validated = $request->validate([
        //     'name' => ['required','string'],
        //     'description' => ['required','string'],
        //     'spécialité' => ['required','string'],
        //     'mag' => 'required|numeric',
        //     'for' => 'required|numeric',
        //     'agi' => 'required|numeric',
        //     'int' => 'required|numeric',
        //     'pv' => 'required|numeric',
            
            
        // ]);
        
        $name= $request->input('name');
        $description= $request->input('description');
        $spécialité= $request->input('spécialité');
        $mag= $request->input('mag');
        $for= $request->input('for');
        $agi= $request->input('agi');
        $int= $request->input('int');
        $pv= $request->input('pv');


    

        $perso = Personnage::create([
            'name'=> $name,
            'description'=> $description,
            'spécialité'=> $spécialité,
            'mag'=> $mag,
            'for'=> $for,
            'agi'=> $agi,
            'int'=> $int,
            'pv'=> $pv,
            'user_id'=>1,

        ]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
