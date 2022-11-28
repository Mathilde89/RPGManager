<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game.game');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createinscription()
    {
        return view('user.inscription');
        

    }


    public function createconnexion()
    {
        return view('user.connexion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeinscription(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'pseudo' => 'required|string|max:255',
            'password' => ['required','string','min:8','max:255']
            // un mot de passe de minimum 8 caractères et comportant une lettre, un chiffre et un symbole. 
            
        ]); 

        $infosuser=[
            'firstname'=>$request->input('firstname'),          
            'lastname'=>$request->input('lastname'),          
            'email'=>$request->input('email'),          
            'pseudo' => $request->input('pseudo'),
            'password' => $request->input('password'),
            
        ];
        User::create($infosuser);
        
        return view('user.connexion')->with('message', 'Créer avec succès');
    } 
    

    public function storeconnexion(Request $request)
    {
        $infosuser=[      
            'email'=>$request->input('email'),          
            'password' => $request->input('password'),
            
        ];
        $listuser=User::all();
        
        foreach($listuser as $key => $value)
        if($infosuser['email']==$value['email']){
            if ($infosuser['password']==$value['password']){
                return view('game.game')->with('message', 'Connexion réussie');
            } 
        } else {
            return "Email ou mot de passe invalide";
        }
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
