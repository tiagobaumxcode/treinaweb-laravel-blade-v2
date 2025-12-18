<?php

namespace App\Http\Controllers;

class CompactorController extends Controller
{
    public function home()
    {
        return view('compactor.home');
    }

    public function portfolio()
    {
        return view('compactor.portfolio');
    }
           
        public function sobre()
    {
        return view('compactor.sobre');
    }

    public function contato()
    {
        return view('compactor.contato');
    }
}   
