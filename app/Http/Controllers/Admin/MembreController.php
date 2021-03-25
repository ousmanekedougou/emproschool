<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->status == 1) {
            $membre = User::all();
            return view('admin.user.index',compact('membre'));
        }else{
            return redirect()->route('admin.home');
        }
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
        if (Auth::user()->status == 1) {
            # code...
        
        $validetor = $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'phone' => 'required|numeric|unique:users',
            'password' => 'required|string',
        ]);

        $add_user = new User();
        if ($request->status != '') {
            $status = $request->status;
        }elseif ($request->status == '') {
            $status = 0;
        }
        $add_user->name = $request->name;
        $add_user->email = $request->email;
        $add_user->phone = $request->phone;
        $add_user->password = $request->password;
        $add_user->status = $status;
        $add_user->save();
        return back();
        }else{
            return redirect()->route('admin.home');
        }
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
        if (Auth::user()->status == 1) {
            # code...
        
        $validetor = $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',
        ]);
        // dd($request->all());

        $update_user = User::find($id);
        if ($request->status != '') {
            $status = $request->status;
        }elseif ($request->status == '') {
            $status = 0;
        }
        if ($request->password == Null) {
            $password = $update_user->password;
        }elseif ($request->password != Null) {
            $password = $request->password;
        }
        $update_user->name = $request->name;
        $update_user->email = $request->email;
        $update_user->phone = $request->phone;
        $update_user->password = $password;
        $update_user->status = $status;
        $update_user->save();
        return back();
        }else{
            return redirect()->route('admin.home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
