<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

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
            'password' => ['required','string','max:255', Password::min(8)->numbers(), Password::min(8)->symbols(), Password::min(8)->mixedCase(),Password::min(8)->letters()]
            // un mot de passe de minimum 8 caractères et comportant une lettre, un chiffre et un symbole. 
      
        ]); 
        

        $infosuser=[
            'firstname'=>$request->input('firstname'),          
            'lastname'=>$request->input('lastname'),          
            'email'=>$request->input('email'),          
            'pseudo' => $request->input('pseudo'),
            'password' => Hash::make($request->input('password')),
            
        ];
        User::create($infosuser);
        
        return view('user.connexion')->with('message', 'Créer avec succès');
    } 
    

    public function storeconnexion(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $infosuser=[      
            'email'=>$request->input('email'),          
            'password' => $request->input('password'),
            
        ];

 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
           return  redirect(route('game.game'))->with('message', 'Connexion réussie');
        }
 
        return back()->withErrors([
            'email' => 'Email ou mot de passe erroné.', ])->onlyInput('email');
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
