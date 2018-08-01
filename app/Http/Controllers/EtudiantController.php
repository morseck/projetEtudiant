<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{

    public function create()
    {
        //
    }


    //fonction pour ajouter un  etudiant
    public function add(Request $request)
    {
         $this->validate($request, [
            'nom'            =>      'required',
            'prenom'         =>      'required'

        ]);
        Etudiant::create($request->all());

        session()->flash('messageenregistrementok', $request->input('nom').' '.$request->input('prenom'));
        return back();
    }

    

    //fonction pour voir un etudiant
    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $avertissement = trans('file.avertissement');

        $titre = trans('file.consulter').'-'.strtolower(trans('file.modifier')).' '.strtolower(trans('file.etudiant'));

        return view('etudiant.show',compact('etudiant','titre','avertissement'));
    }


    //fonction pour editer un etudiant
    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $titre = ucfirst(trans('file.modifier'));
        
        return view('etudiant.edit',compact('etudiant','titre')); 
    }

    

    //fonction pour updater un etudiant
    public function update(Request $request, $id)
    {
        $etudiant           =   Etudiant::findorfail($id);
        $etudiant->nom      =   $request->input('nom');
        $etudiant->prenom   =   $request->input('prenom');
        $etudiant->save();

        session()->flash('messagemiseaok', ucfirst(strtolower($request->input('prenom'))).' '.strtoupper($request->input('nom')));

        return back()->with('status',trans('etudiant.msgmiseajourok')); 
    }

    
    //fonction pour supprimer un etudiant
    public function destroy($id)
    {   

        Etudiant::destroy($id);

        session()->flash('messagesupprimessionok', trans('file.messagesupprimessionok'));
        return Redirect('/');
    }
}
