<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Near\NearAPI;
use Near\TransactionBuilder;

class EncuestaController extends Controller
{
    public function index()
    {
        // Mostrar la página de encuestas
        return view('encuestas.index', [
            'pregunta' => '¿Qué opinas de blockchain en la educación?',
            'opciones' => ['Me encanta', 'Está bien', 'No me interesa', 'No lo entiendo']
        ]);
    }

    public function votar(Request $request)
    {
        // Lógica para registrar el voto con blockchain
        $opcionElegida = $request->input('opcion');
        // Aquí iría la lógica para guardar el voto usando MyNearWallet y blockchain
        return back()->with('mensaje', '¡Gracias por votar! Opción elegida: ' . $opcionElegida);
    }

    public function enviarRecompensa(Request $request)
    {
        // Lógica para enviar la recompensa a un estudiante por haber votado varias veces
        $usuarioWallet = $request->input('wallet');
        // Aquí usarías MyNearWallet para enviar la transferencia
        return back()->with('mensaje', '¡Recompensa enviada a ' . $usuarioWallet . '!');
    }
}
