<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Confirmer;
use App\Notifications\EtudiantRegistered;
class BaseController extends Controller
{
    public function index(){
        return view('user.base.index');
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
            'niveau' => 'required|string',
            'fonction' => 'required|string',
            'abandon' => 'required|string',
            'formation' => 'required|string',
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
        $add_candidat->niveau = $resquest->niveau;
        $add_candidat->fonction = $resquest->fonction;
        $add_candidat->abandon = $resquest->abandon;
        $add_candidat->domaine = $resquest->formation;
        $add_candidat->save();
        // $add_candidat->notify(new EtudiantRegistered());
        return redirect()->route('index')->with('success', 'Votre Inscription a ete valider avec success');
    }
}
