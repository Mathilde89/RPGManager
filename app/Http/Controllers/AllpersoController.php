<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use App\Models\User;
use Illuminate\Http\Request;

class AllpersoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listallperso=Personnage::all();
        $listalljoueur=User::all();
        

        return view('allperso.index', ['listallperso' =>$listallperso], ['listalljoueur' =>$listalljoueur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $listallperso=Personnage::all();
        $listalljoueur=User::all();               

        $valuetrispe=$request->input('submitTriSpe');
        $valuetrijoueur=$request->input('submitTriJoueur');
        $valuetrinom=$request->input('submitTriNom');
        // dd($valuetrinom);
        
      
           $listallperso= Personnage::where([
                ['spécialité', '=', $valuetrispe],
                ['user_id', '=', $valuetrijoueur],
                ['name', '==', $valuetrinom],
           ])->get();

        if($valuetrijoueur==null){
            if($valuetrispe==null){
                if($valuetrinom==null){
                    //les 3 sont null affiche tout
                    $listallperso=Personnage::all();

                } else {
                    // joueur null spé null nom non null
                    $listallperso= Personnage::where([
                        
                        ['name', '=', $valuetrinom],
                   ])->get();
                }
            } else {
                
                if($valuetrinom==null){
                    // joueur null spé non null nom null
                    $listallperso= Personnage::where([
                        ['spécialité', '=', $valuetrispe],
                       
                   ])->get();

                } else {
                    // joueur null spé non null nom non null
                    $listallperso= Personnage::where([
                        ['spécialité', '=', $valuetrispe],
                        ['name', '=', $valuetrinom],
                   ])->get();

                }

            }

        } else {
            
            if($valuetrispe==null){
                
                if($valuetrinom==null){
                    // Joueur non null spé null, nom null;
                    $listallperso= Personnage::where([
                        ['user_id', '=', $valuetrijoueur],
                   ])->get();

                } else{
                    // Joueur non null spé null nom non null;
                    $listallperso= Personnage::where([
                        ['user_id', '=', $valuetrijoueur],
                        ['name', '=', $valuetrinom],
                   ])->get();
                }

            } else {
                
                if($valuetrinom==null){
                        // Joueur non null, spé non null nom null;
                        $listallperso= Personnage::where([
                            ['spécialité', '=', $valuetrispe],
                            ['user_id', '=', $valuetrijoueur],
                       ])->get();
                } else {
                    // Joueur non null, spé non null nom non null;
                    $listallperso= Personnage::where([
                        ['spécialité', '=', $valuetrispe],
                        ['user_id', '=', $valuetrijoueur],
                        ['name', '=', $valuetrinom],
                   ])->get();
                }

            }

        }
       

        

       

        return view('allperso.index', ['listallperso' =>$listallperso], ['listalljoueur' =>$listalljoueur]);
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
