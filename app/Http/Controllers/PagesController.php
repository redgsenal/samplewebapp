<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\Common;

class PagesController extends Controller {
    public function getIndex(){
        return view('pages.home');
    }
    public function getAbout(){
    	$companyName = "Foo Corp.";
    	$isRegistered = false;
        return view('pages/about')
        	->with("companyName", $companyName)
        	->with("isRegistered", $isRegistered);
    }
    public function getContact(){
        return view('pages/contact');
    }
    public function getHelp(){
    	return view('pages/help');
    }
}
