@extends('layout.master')
@section('title',"FreeCourse")
@section('content')
    <div class="album">
        <div class="container  border border-warning mt-3 mb-5">
            <h1 class=" font-weight-normal text-warning text-center">Free Courses</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    @if($course->category === 'Free Course')
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset('/uploads/'.unserialize($course->image)[0])}}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22368%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20368%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fc6a9ef%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fc6a9ef%22%3E%3Crect%20width%3D%22368%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22123.3359375%22%20y%3D%22120.45%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="text-center">({{$course->title}})</p>
                                    <p class="card-text">{{substr($course->description,1,100)}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole("Admin"))
                                                <div class="btn-group">
                                                    <a href="{{url("admin/deleteFree/".$course->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                    <a href="{{url("admin/editFree/".$course->id)}}" class="btn btn-sm text-white btn-warning">Edit</a>
                                                </div>
                                            @else
                                                <div class="btn-group">
                                                    <a href="{{url("viewCourse/".$course->id)}}" class="btn btn-sm text-white btn-warning">ViewDetail</a>
                                                    <a href="{{$course->link}}" class="btn btn-sm text-white btn-primary">Learn</a>
                                                </div>
                                            @endif
                                        @else
                                            <div class="btn-group">
                                                <a href="{{url("/login")}}" class="btn btn-sm text-white btn-warning">ViewDetail</a>
                                                <a href="{{url("/login")}}" class="btn btn-sm text-white btn-primary">Learn</a>
                                            </div>
                                        @endif
                                        <small class="text-muted" id="date">{{$course->updated_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection

