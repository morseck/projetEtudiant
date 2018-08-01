<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;

use App;
use Lang;

class LanguageChooserController extends Controller
{
     public function chooser($locale)
    {
    	if (in_array($locale, \Config::get('app.locales'))) {
   		 Session::put('locale', $locale);

   		 session()->flash('languechangee', trans('file.languechangee'));
  		}
  		return redirect()->back();
    }
}
