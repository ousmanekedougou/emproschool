<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User\Confirmer;
use App\Http\Controllers\Controller;

class WebController extends Controller
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
    public function index()
    {
        $web_initial = Confirmer::where('domaine',2)->get();
        return view('admin.web.index',compact('web_initial'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wordpress_initial = Confirmer::where('domaine',7)->get();
        return view('admin.wordpress.index',compact('wordpress_initial'));
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
             // dd('dfnjmf');
        // dd($request->all());
        $validator = $this->validate($request,[
            'genre' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'adresse' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string',
            'formation' => 'required|string',
        ]);
        $update_candidat = Confirmer::find($id);
        $update_candidat->genre = $request->genre;
        $update_candidat->nomcomplet = $request->name;
        $update_candidat->email = $request->email;
        $update_candidat->phone = $request->phone;
        $update_candidat->adresse = $request->adresse;
        $update_candidat->date_naissance = $request->date;
        $update_candidat->lieu_naissance = $request->lieu;
        $update_candidat->domaine = $request->formation;
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
