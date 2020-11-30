<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Formulario;

class SendMail extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //vars 
        $nombre =$request->nombre;
        $correo =$request->correo;
        $telefono =$request->telefono;
        $mensaje =$request->mensaje;

        $info =  ['nombre'=> $nombre, 'correo'=> $correo, 'telefono'=>$telefono, 'mensaje'=>$mensaje ];

        //enviar correo a mercadeo
        // Mail::to('mercadeo.distrialimentos@gmail.com')->send(new Formulario($info));
        Mail::to('mercadeo.distrialimentos@gmail.com ')->send(new Formulario($info));

        //exito
        return back()->with('exito','Su correo ha sido enviado de manera exitosa, ¡Le responderemos lo mas pronto posible!');
    }
}
