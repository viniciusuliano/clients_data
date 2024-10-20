<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Código para quando o Controller for invocado diretamente
    }


    public function getClient($id){
        $client = Client::find($id); 
        if ($client) {
            return response()->json($client, 200);
        }
        return response()->json(['message' => 'Client not found'], 404);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'cpf' => 'required|string|max:14|unique:clients',
            'phone'=> 'nullable|string|max:15'
        ]);

        $client = Client::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'cpf' => $validatedData['cpf'],
            'phone' => $validatedData['phone'],
        ]);

        return response()->json($client, 201);
    }

    public function updateClient(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:clients,email,' . $id,
            'cpf' => 'sometimes|string|max:14|unique:clients,cpf,' . $id,
            'phone'=> 'nullable|string|max:15'
        ]);

        $client = Client::find($id);
        
        if ($client) {
            $client->update($validatedData);
            return response()->json($client, 200);
        }

        return response()->json(['message' => 'Client not found'], 404);
    }

    public function deleteClient($id)
    {
        $client = Client::find($id);
    
        if ($client) {

            $client->delete(); 
            return response()->json(['message' => 'Client deleted successfully'], 200);
        }
    
        return response()->json(['message' => 'Client not found'], 404);
    }
    
}
