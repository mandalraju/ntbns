<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Session;
use Image;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('notice.index')->withNotices($notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating the data enterd by the user!!
        $this->validate($request,array(
                'title' => 'required|max:255',
                'body'  => 'required'
            ));

        //Storing the data to the database after propoer validation check
        $notice = new Notice;
        //Saving the notice contents
        $notice->title = $request->title;
        $notice->body  = $request->body;

        //saving the image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1000,1000)->save($location);
            $notice->image = $filename;
        }

        $notice->save();
        Session::flash('success','The Notice was successfully saved!!');

        //Redirecting the user to proper route
        return redirect()->route('notice.show',$notice->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);
        return view('notice.show')->with('notice',$notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the notice in the database and save it as a variable
        $notice = Notice::find($id);

        //return the view and pass in the variable 
        return view('notice.edit')->withNotice($notice);
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
