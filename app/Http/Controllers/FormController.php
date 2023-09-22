<?php

namespace App\Http\Controllers;

use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'asunto' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        // Obtener los datos del formulario
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $asunto = $request->input('asunto');
        $mensaje = $request->input('mensaje');

        // Enviar el correo electrónico
        Mail::to($email)->send(new Correo($nombre, $email, $asunto, $mensaje));

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado con éxito');
    }
}
