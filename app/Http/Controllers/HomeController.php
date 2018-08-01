<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;

use App;
use Lang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $titre = trans('file.accueil');
         $avertissement = trans('file.avertissement');
        return view('home',compact('etudiants','titre','avertissement'));
    }
}
