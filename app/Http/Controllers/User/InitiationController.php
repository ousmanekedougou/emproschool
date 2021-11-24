<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User\Initiation;
use App\Http\Controllers\Controller;
use App\Notifications\EtudiantRegistered;
class InitiationController extends Controller
{
   public function index(){
    return view('user.initiation.index');
   }


   public function post(Request $request){
      $validator = $this->validate($request,[
          'genre' => 'required|string',
          'nomcomplet' => 'required|string',
          'email' => 'required|email|unique:initiations',
          'phone' => 'required|numeric|unique:initiations',
          'adresse' => 'required|string',
          'date_naissance' => 'required|date',
          'lieu_naissance' => 'required|string',
      ]);

      // dd($request->all());

      $add_candidat = new Initiation;
      $add_candidat->genre = $request->genre;
      $add_candidat->nomcomplet = $request->nomcomplet;
      $add_candidat->email = $request->email;
      $add_candidat->phone = $request->phone;
      $add_candidat->adresse = $request->adresse;
      $add_candidat->date_naissance = $request->date_naissance;
      $add_candidat->lieu_naissance = $request->lieu_naissance;
      $add_candidat->save();
    //   $add_candidat->notify(new EtudiantRegistered());
      return redirect()->route('index')->with('success', 'Votre Inscription a ete valider avec success');
      
  }
}
