<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class FreeController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('freeCourse/free',compact('courses'));
    }

    public function create() {
        return view('admin/post/freeCourse/createFreeCourse');
    }

    public function created(PostRequest $request) {

        $files = $request->file("file");
        $images = array();
        foreach ($files as $file) {
            $image = uniqid()."_".$file->getClientOriginalName();
            array_push($images,$image);
            $file->move(public_path()."/uploads/",$image);
        }
        $course = new Course();
        $course->title = $request->get("title");
        $course->link  = $request->get("link");
        $course->category = $request->get("category");
        $course->description = $request->get("description");
        $course->image = serialize($images);
        $course->save();

        return redirect('admin/createFree')->with("success","Create Successfully");
    }

    public function edit($id) {
        $course = Course::where("id",$id)->first();
        return view("admin/post/freeCourse/editCourse",compact("course"));
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
        $course->type = $request->get("type");
        $course->link = $request->get("link");
        $course->image = serialize($image);
        $course->category = $request->get("category");
        $course->update();
        return redirect("/freeCourse");
    }

    public function delete($id) {
        Course::destroy("id",$id);
        return redirect('/freeCourse');
    }

}
