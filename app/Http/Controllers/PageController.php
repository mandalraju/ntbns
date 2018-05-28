<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('pages.index');
    }

    public function getAbout(){
        return view('pages.about');
    }
    
    public function getContact(){
        return view('pages.contact');
    }


    /*public function getEvents(){
    	return view('events');
    }

    public function getNotices(){
    	return view('notices');
    }

    
    public function getMission(){
    	return view('mission');
    }

    public function getHelpSupport(){
    	return view('helpsupport');
    }

    public function getPrograms(){
    	return view('programs');
    }*/

}
