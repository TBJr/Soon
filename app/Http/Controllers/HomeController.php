<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use Alert;
use App\Models\Subscriber;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }

    public function newsletterSaveData(Request $request){

        $this->validate($request, [
            'email' => 'required'
        ]);

        $subscribers = Subscriber::where('email', '=', $request->input('email'))->first();

        if ($subscribers === null) {
            // User does not exist
            $subscriber = new Subscriber;
                $subscriber->email = $request->email;

                $subscriber->save();
                Alert::toast('Thanks for subscribing with us!','success');
        } else {
            // User exits
            Alert::toast('Sorry! You\'ve already subscribed.','error');
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactSaveData(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'messages' => 'required',
        ]);

        $input = $request->all();

        Mail::send('emails.contactUs', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'messages' => $input['messages'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('backendbackbonner@outlook.com', 'Admin')->subject($request->get('subject'));
        });

        // Alert::success('Success', 'Thanks for contacting us!');

        ContactUs::create($input);
        Alert::toast('Thanks for contacting us!','success');
        return redirect()->back();
    }
}
