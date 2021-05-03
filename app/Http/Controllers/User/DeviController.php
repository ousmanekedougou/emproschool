<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Devi;
use Illuminate\Http\Request;

class DeviController extends Controller
{
    public function index(){
        return view('user.devi.index');
    }

     public function post(Request $request){

        $validator = $this->validate($request,[
          'genre' => 'required|string',
          'nomcomplet' => 'required|string',
          'email' => 'required|email|unique:devis',
          'phone' => 'required|numeric|unique:devis',
          'service' => 'required|string',
          'description' => 'required|string',
        ]);

        $add_service = new Devi;
        $add_service->genre = $request->genre;
        $add_service->nomcomplet = $request->nomcomplet;
        $add_service->email = $request->email;
        $add_service->phone = $request->phone;
        $add_service->service = $request->service;
        $add_service->description = $request->description;
        $add_service->save();
        return redirect()->route('index')->with('success', 'Votre demande a ete enregistre');

    }
}
