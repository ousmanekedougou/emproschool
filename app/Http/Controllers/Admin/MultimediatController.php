<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User\Confirmer;
use App\Http\Controllers\Controller;

class MultimediatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initiale()
    {
        $multimediat_initial = Confirmer::where('module',4)->get();
        return view('admin.multimediat.initiale',compact('multimediat_initial'));
    }

    public function intermediare()
    {
        $multimediat_intermediare = Confirmer::where('module',5)->get();
        return view('admin.multimediat.intermediare',compact('multimediat_intermediare'));
    }

    public function avancer()
    {
        $multimediat_avancer = Confirmer::where('module',6)->get();
        return view('admin.multimediat.avance',compact('multimediat_avancer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validate($request,[
            'genre' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'adresse' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string',
            'niveau' => 'required|string',
        ]);
        $update_candidat = Confirmer::find($id);
        $update_candidat->genre = $request->genre;
        $update_candidat->nomcomplet = $request->name;
        $update_candidat->email = $request->email;
        $update_candidat->phone = $request->phone;
        $update_candidat->adresse = $request->adresse;
        $update_candidat->date_naissance = $request->date;
        $update_candidat->lieu_naissance = $request->lieu;
        $update_candidat->module = $request->niveau;
        $update_candidat->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Confirmer::find($id)->delete();
        return back();
    }
}
