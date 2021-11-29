<?php

namespace App\Http\Controllers\User;

use App\Models\User\Gratuit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\EtudiantRegistered;
class GratuitController extends Controller
{
    public function index(){
        return view('user.gratuit.index');
    }

    public function post(Request $request){
        $validator = $this->validate($request,[
            'genre' => 'required|string',
            'nomcomplet' => 'required|string',
            'email' => 'required|email|unique:gratuits',
            'phone' => 'required|numeric|unique:gratuits',
            'adresse' => 'required|string',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string',
            'niveau' => 'required|numeric',
            'notion_in' => 'required|numeric',
            'notion_pro' => 'required|numeric',
            'formation' => 'required|string',
        ]);

        // dd($request->all());

        $add_candidat = new Gratuit;
        $add_candidat->genre = $request->genre;
        $add_candidat->nomcomplet = $request->nomcomplet;
        $add_candidat->email = $request->email;
        $add_candidat->phone = $request->phone;
        $add_candidat->adresse = $request->adresse;
        $add_candidat->date_naissance = $request->date_naissance;
        $add_candidat->lieu_naissance = $request->lieu_naissance;
        $add_candidat->niveau_etude = $request->niveau;
        $add_candidat->connaissance_informatique = $request->notion_in;
        $add_candidat->connaissance_programation = $request->notion_pro;
        $add_candidat->module = $request->formation;
        $add_candidat->save();
        return redirect()->route('index')->with('success', 'Votre Inscription a été enrégistré avec succéss.Nous vous informerons la date de démarage des cours.');
    }
}
