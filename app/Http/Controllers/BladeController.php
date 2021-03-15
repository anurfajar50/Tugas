<?php

namespace App\Http\Controllers;

use Illuminate\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'Anggur',
            1 => 'Apel',
            2 => 'Durian',
            3 => 'Persik',

        );

        $name = array(
            0 => 'Fajar'

        );
        return view('pages.home', compact('name', 'fruits'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    
}
