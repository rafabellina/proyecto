<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorPrincipal extends Controller
{
    public function showIndex() {
        return view('Index');
    }
    public function showInfo(){
        return view('info');
        
    }
    public function showContactos(){
        return view('contacto');
    }
}
