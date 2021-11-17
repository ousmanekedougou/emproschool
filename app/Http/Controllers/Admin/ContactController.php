<?php

namespace App\Http\Controllers\Admin;

use App\Models\User\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ResponseEmail;
use App\Mail\MailGroupe;

class ContactController extends Controller
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
        $all_contact = Contact::paginate(10);
        return view('admin.contact.index',compact('all_contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.groupe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validator = $this->validate($request,[
            'msg' => 'required|string',
        ]);
        $mailable = new ResponseEmail($request->name,$request->email,$request->subject,$request->msg);
         Mail::send($mailable);
        return redirect()->route('admin.contact.index')->with('success','Merci de nous contacter');
    }


    public function groupe(Request $request)
    {
        $sendmails = Contact::all();
        $validator = $this->validate($request,[
            'msg' => 'required|string',
            'subject' => 'required|string',
        ]);
        foreach( $sendmails as $sendmail){
        $mailable = new MailGroupe($sendmail->name,$sendmail->email,$request->subject,$request->msg);
         Mail::send($mailable);
        }
        return redirect()->route('admin.contact.index')->with('success','Merci de nous contacter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $view = Contact::find($id);
        $view->status = 1;
        $view->save();
        return view('admin.contact.show',compact('view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response_user = Contact::where('id',$id)->first();
        return view('admin.contact.create',compact('response_user'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return back();
    }
}
