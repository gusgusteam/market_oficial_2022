<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 //IMPORTAMOS LA CLASE MAILABLE
use App\Mail\ContactanosMaillable;
use Illuminate\Support\Facades\Mail;    //IMPORTAMOS LA CLASE MAIL

class ContactanosController extends Controller
{
    public function index(){
        return view('correo.index');
    }
    
    public function store(Request $request){

        $request->validate([
            'asunto'=>'required',
            'name'=>'required',
            'correo'=>'required|email',
            'correodestino'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo = new ContactanosMaillable($request->all());
        //CORREO AL QUE SE DESEA MANDAR EL MSM
        Mail::to($request->correodestino)->send($correo);
        //Mail::to('administrador@correo.panaderia.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','envio correcto');//ENVIANDO CON UNA VARIABLE SESSION
    }
}
