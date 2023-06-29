<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function listeclients()
    { $liste_clients=Client::all();
        return view('Listeclients',compact("liste_clients"));
    }
    public function create(Client $client)
    {
       

return view("createClient");
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'Adresse' => 'required',
        ]);
       

  $client = new Client;
        $client->agent_name = $validatedData['nom'];
        $client->client_name = $validatedData['email'];
        $client->client_address = $validatedData['Adresse'];
       

        // Enregistrer le client dans la base de données
        $client->save();

        // Rediriger vers une autre page ou afficher un message de succès
        return redirect()->route('Listeclients')->with('success', 'Le client a été créé avec succès.');
    }



    public function getAgentByClient($clientId)
{
    $client = Client::findOrFail($clientId);
    $agent = $client->agent;

    // Faites quelque chose avec l'agent du client...
}
}
