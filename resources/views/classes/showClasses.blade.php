@extends("layout.master")
@section("title","Home")
@section("content")
    <div class="album">
        <div class="container">
            <div class="container  border border-warning mt-3 mb-5">
                <h1 class=" font-weight-normal text-warning text-center">IT Classes</h1>
            </div>
            <div class="row">
                @foreach($classes as $class)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset("/classUpload/".unserialize($class->image)[0])}}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175b2c278d8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175b2c278d8%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7109375%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-body">
                                   <p class="text-center">(<span>{{$class->name}}</span>)</p>
                                    <p class="card-text">{{substr($class->description,0,100)}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole("Admin"))
                                                <div class="btn-group">
                                                    <a href="{{url("admin/deleteClass/".$class->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                    <a href="{{url("admin/editClass/".$class->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                                </div>
                                            @else
                                                <div class="btn-group">
                                                    <a href="{{url("/viewClass/".$class->id)}}" class="btn btn-sm text-white btn-warning">More Detail</a>
                                                    <a href="tel:{{$class->ph_number}}" class="btn btn-sm btn-primary">Intersect</a>
                                                </div>
                                            @endif
                                        @else
                                            <div class="btn-group">
                                                <a href="{{url("/login")}}" class="btn btn-sm text-white btn-warning">ViewDetail</a>
                                                <a href="{{url("/login")}}" class="btn btn-sm text-white btn-primary">Intersect</a>
                                            </div>
                                        @endif
                                        <small class="text-warning font-weight-bold">({{$class->location}})</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
