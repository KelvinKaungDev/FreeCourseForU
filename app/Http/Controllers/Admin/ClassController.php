<?php

namespace App\Http\Controllers\Admin;

use App\Classes;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRequest;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin/classes/createClass");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ClassRequest $request)
    {
        $files = $request->file("file");
        $images = array();
        foreach ($files as $file) {
            $image = uniqid()."_".$file->getClientOriginalName();
            array_push($images,$image);
            $file->move(public_path()."/classUpload/",$image);
        }
        $class = new Classes();
        $class->name = $request->get("name");
        $class->description = $request->get("description");
        $class->location = $request->get("location");
        $class->ph_number = $request->get("ph_number");
        $class->image = serialize($images);
        $class->save();
        return redirect('/');
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
        $class = Classes::where("id",$id)->first();
        return view("classes/viewClasses",compact("class"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::where("id",$id)->first();
        return  view("admin/classes/editClass",compact("class"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassRequest $request, $id)
    {
        $files = $request->file("file");
        $images = array();
        foreach ($files as $file) {
            $image = uniqid()."_".$file->getClientOriginalName();
            array_push($images,$image);
            $file->move(public_path()."/classUpload/",$image);
        }
        $class = Classes::where("id",$id)->first();
        $class->name = $request->get("name");
        $class->description = $request->get("description");
        $class->location = $request->get("location");
        $class->ph_number = $request->get("ph_number");
        $class->image = serialize($images);
        $class->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classes::destroy("id",$id);
        return  redirect("/");
    }

    public function showClass() {
        $classes = Classes::all();
        return view("classes/showClasses",compact("classes"));
    }
}
