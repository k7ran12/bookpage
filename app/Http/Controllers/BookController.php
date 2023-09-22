<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');
    
        $apiUrl = 'http://157.245.90.86:3000/api/search';
    
        // Crea una instancia de Guzzle HTTP Client
        $client = new Client();
    
        try {
            // Realiza la solicitud POST a la API con los datos JSON
            $response = $client->post($apiUrl, [
                'json' => [
                    'search' => $query,
                ],
            ]);
    
            // Obtiene el contenido de la respuesta JSON
            $apiResponse = $response->getBody()->getContents();
    
            // Puedes decodificar el JSON si es necesario
            $apiData = json_decode($apiResponse);
    
            // Devuelve los resultados de la API como respuesta JSON
            return response()->json(['results' => $apiData]);
        } catch (\Exception $e) {
            // Maneja cualquier error de la solicitud aquí
            return response()->json(['error' => 'Error al realizar la solicitud a la API']);
        }
    }
}
