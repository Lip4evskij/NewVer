<?php

namespace App\Http\Controllers;

use App\Comm;
use Illuminate\Http\Request;

class DashComments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comm= Comm::orderby('created_at', 'desc')->paginate(2);
        return view('admin.show_comm')->withPost($comm);
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
        $comm=new Comm();
        $comm->name=$request->name;
        $comm->posts_id=$request->posts_id;
        $comm->text=$request->text;
        $comm->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $comm=Comm::find($id);
//        return view('admin.show_comm')->withPost($comm);
        $comm= Comm::orderby('created_at', 'desc')->paginate(8);
        return view('admin.show_comm')->withPost($comm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comm=Comm::find($id);
        return view('admin.edit_comm')->withPost($comm);
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
        $comm= Comm::find($id);
        $comm->name=$request->name;
        $comm->posts_id=$request->posts_id;
        $comm->text=$request->text;
        $comm->save();
        $request->session()->flash('success', 'Успешное редактирование!');
        return redirect()->route('comments.show',$comm->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Comm::find($id);
        $post->delete();
        return redirect('/comments/show');
    }
}
