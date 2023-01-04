<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\ContactRequest;
use App\Models\Contact;
use App\Models\Area;
use App\Models\ContactSetting;
use Session;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['areas'] = Area::all();
        return view('front.contact',$data);
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
    public function store(ContactRequest $request)
    {
        $result = Contact::create($request->all());
        if($result) {
            Session::push('result',true);
            $emails = ContactSetting::where('status',1)->where('id',$request->area_id)->get()->pluck('email')->toArray();
            $area = Area::where('id',$request->area_id)->first();
            // Mail::to($emails)->send(new AutoMail);
            if($emails) {
                Mail::raw(__('front.contact.question').":".$request->question."\r\n".__('front.contact.area').":".$area->name."\r\n".__('front.contact.country').":".$request->country."\r\n".__('front.contact.email').":".$request->email."\r\n".__('front.contact.phone').":".$request->phone."\r\n".__('front.contact.content').":".$request->content, function($message) use ($request, $emails){
                    $message->to($emails)->subject($request->question);
                });
            }
            return redirect()->route('front.contact.index',['lang'=>$request->lang]);
        }else{
            Session::push('result',false);
            return back()->withInput();
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
        //
    }
}
