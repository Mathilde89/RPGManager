<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Personnage;
use Illuminate\Support\Facades\Auth;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listgroupe=Groupe::all();
        return view('groupe.index', ['listgroupe' =>$listgroupe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return   view('groupe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'groupename' => 'required|string|max:255',
            'groupedescription' => 'required|string|max:255',
            'groupenumberplace' => 'required|numeric|max:255',
            
        ]); 
        
        $infosgroupe=[
            'name'=>$request->input('groupename'),          
            'detail'=>$request->input('groupedescription'),          
            'nbplace'=>$request->input('groupenumberplace'),          
            'author_id'=>Auth::user()->id,          
           
            
        ];
        Groupe::create($infosgroupe);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    //    $listgroupe= Groupe::findOrFail($id);
        // $listgroupe=Groupe::all();
       $idconnecte=Auth::user()->id;
        $listgroupe=Groupe::where('author_id', $idconnecte)->get();
      
        $listperso=Personnage::where('user_id', $idconnecte)->get();
        return view('groupe.show', ['listgroupe' =>$listgroupe], ['listperso' =>$listperso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truc= Groupe::findOrFail($id);
        $listeperso= Personnage::where('user_id', Auth::user()->id)->get();
        
        
        return view('groupe.edit', [ 'truc' => $truc ], [ 'listeperso' => $listeperso ]) ;
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
        $request->validate([
            'groupename' => 'required|string|max:255',
            'groupedescription' => 'required|string|max:255',
            'groupenumberplace' => 'required|numeric|max:255',
            
        ]); 
        
        $infosgroupe=[
            'name'=>$request->input('groupename'),          
            'detail'=>$request->input('groupedescription'),          
            'nbplace'=>$request->input('groupenumberplace'),          
            'author_id'=>Auth::user()->id,                     
        ];

        $groupemodify = Groupe::findOrFail($id);
        $groupemodify-> name = $request->input('groupename');
        $groupemodify-> detail = $request->input('groupedescription');
        $groupemodify-> nbplace = $request->input('groupenumberplace');
        $groupemodify->save();

        // $addgroupe = Personnage::findOrFail(3);
       
        // $addgroupe -> group_id = $id;
        // $addgroupe->save();
    
       return redirect(route('groupe.index'))->with('message', 'Groupe modifié avec succès');

    } 

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Groupe::findOrFail($id);
        $user->delete();
        return redirect(route('groupe.index'))->with('message', 'Groupe supprimé avec succès');
    }

    public function add($id)
    {
        
        $truc= Groupe::findOrFail($id);
        $listeperso= Personnage::where('user_id', Auth::user()->id)->get();       
        return view('groupe.addperso', [ 'truc' => $truc ], [ 'listeperso' => $listeperso ]) ;

    }
    public function updategrouperso(Request $request, $id)
    {
        $idpersochoisi = $request->input('perso');
        $addgroupe = Personnage::findOrFail($idpersochoisi);
       
        $addgroupe -> group_id = $id;
        $addgroupe->save();
    
        return redirect(route('groupe.index'))->with('message', 'Personnage ajouté au groupe avec succès');
    
    
    }
}
