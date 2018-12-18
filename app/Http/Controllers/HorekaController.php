<?php

namespace App\Http\Controllers;



class HorekaController extends Controller
{
    public function home()
    {
    	return view('horeka.index');
    }

    public function about()
    {
    	return view('horeka.about');
    }

    public function contact()
    {
    	return view('horeka.contact');
    }

    public function gallery()
    {
    	return view('horeka.gallery');
    }

    public function action()
    {
    	return view('horeka.action');
    }

    public function history()
    {
    	return view('horeka.history');
    }

    public function textile()
    {
    	return view('horeka.textile');
    }

    public function application()
    {
    	return view('horeka.application');
    }

    public function detail()
    {
    	return view('horeka.detail');
    }
}
