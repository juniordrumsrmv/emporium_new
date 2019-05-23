<?php

namespace Emporium\Http\Controllers;

class EmporiumController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (!\Gate::denies('update', 'adada')){
//            echo "DADA";
//        }

//        dd(\Auth::user()->extra['language']);

//        return view('layouts.emporium.main', compact('content'));
        return view('home');
    }

    public function redirect()
    {
        echo "dadadad";

        return view('home');
    }

    public function passports()
    {

        return view('layouts.emporium.passports');
    }
}