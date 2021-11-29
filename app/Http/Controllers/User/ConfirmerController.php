<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User\Confirmer;
use App\Http\Controllers\Controller;
use App\Notifications\EtudiantRegistered;
class ConfirmerController extends Controller
{
    public function index(){
        return view('user.confirmer');
    }

    public function post(Request $resquest){
        $validator = $this->validate($resquest,[
            'genre' => 'required|string',
            'nomcomplet' => 'required|string',
            'email' => 'required|email|unique:confirmers',
            'phone' => 'required|numeric|unique:confirmers|min:9',
            'adresse' => 'required|string',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string',
            // 'niveau' => 'required|numeric',
            // 'notion_in' => 'required|numeric',
            // 'notion_pro' => 'required|numeric',
            'formation' => 'required|numeric',
        ]);

        // dd($resquest->all());

        $add_candidat = new Confirmer;
        $add_candidat->genre = $resquest->genre;
        $add_candidat->nomcomplet = $resquest->nomcomplet;
        $add_candidat->email = $resquest->email;
        $add_candidat->phone = $resquest->phone;
        $add_candidat->adresse = $resquest->adresse;
        $add_candidat->date_naissance = $resquest->date_naissance;
        $add_candidat->lieu_naissance = $resquest->lieu_naissance;
        // $add_candidat->niveau_etude = $resquest->niveau;
        // $add_candidat->connaissance_informatique = $resquest->notion_in;
        // $add_candidat->connaissance_programation = $resquest->notion_pro;
        $add_candidat->module = $resquest->formation;
        $add_candidat->save();
        // $add_candidat->notify(new EtudiantRegistered());
        return redirect()->route('index')->with('success', 'Votre Inscription a été enrégistré avec succéss.
            Veuillez passer a notre séige pour compléter votre inscription.');
    }
}
