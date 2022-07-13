<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view("admin/post/createPost");
    }

    public function createPost(PostRequest $request) {
        $files = $request->file("file");
        $images = array();
        foreach ($files as $file) {
            $image = uniqid()."_".$file->getClientOriginalName();
            array_push($images,$image);
            $file->move(public_path()."/uploads/",$image);
        }
        
        $course              = new Course();
        $course->title       = $request->get("title");
        $course->link        = $request->get("link");
        $course->ph_number   = $request->get("ph_number");
        $course->category    = $request->get("category");
        $course->description = $request->get("description");
        $course->price       = $request->get("price");
        $course->image       = serialize($images);
        $course->save();

        return redirect('/admin/createPost')->with('success','Create Successfully');
    }

    public function edit($id) {
        $course = Course::where("id",$id)->first();
        return view("admin/post/editPost",compact("course"));
    }

    public function update(PostRequest $request,$id) {
        $course = Course::where("id",$id)->first();
        $files = $request->file("file");
        $image = array();
        foreach ($files as $file){
            $filename = uniqid()."_".$file->getClientOriginalName();
            array_push($image,$filename);
            $file->move(public_path()."/uploads/",$filename);
        }
        $course->title = $request->get("title");
        $course->description = $request->get("description");
        $course->link = $request->get("link");
        $course->ph_number = $request->get("ph_number");
        $course->image = serialize($image);
        $course->category = $request->get("category");
        $course->price = $request->get("price");
        $course->update();
        return redirect("/courses");
    }

    public function delete($id) {
        Course::destroy("id",$id);
        return redirect("/courses");
    }
}
