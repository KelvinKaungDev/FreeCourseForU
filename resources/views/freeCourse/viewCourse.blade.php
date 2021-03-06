@extends("layout.master")
@section("title","Home")
@section("content")
    <div class="album py-5 ">
        <div class="container">
            <h2 class="text-warning text-center mb-5">{{$course->title}}</h2>
                        <div class="col-md-8 m-auto">
                            <div class="card mb-4 box-shadow">
                                <div class="row">
                                    @foreach(unserialize($course->image) as $images)
                                            <img class="card-img-top col-md-6 mb-2" src="{{asset("/uploads/".$images)}}" alt="Thumbnail [100%x225]" style="height: 225px; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175b2c278d8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175b2c278d8%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7109375%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    @endforeach
                                        <img class="card-img-top col-md-6" src="{{asset("img/notebook-336634_1920.jpg")}}" alt="Thumbnail [100%x225]" style="height: 225px; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175b2c278d8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175b2c278d8%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7109375%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$course->description}}</p>

                                    @if($course->category == "Free Course")
                                        {{ __('???????????????????????? link ->') }}
                                        <a href="{{$course->link}}" class="ml-2">{{$course->link}}</a>
                                    @endif
                                    @if($course->category == "Pay Course")
                                        {{ __('?????????????????????????????? Email Address ->') }}
                                        <a href="#" class="ml-2">{{$course->link}}</a><br>
                                        {{ __('?????????????????????????????? Ph Number ->') }}
                                        <a href="tel:{{$course->ph_number}}" class="ml-2">{{$course->ph_number}}</a>
                                    @endif

                                    @if($course->id == 2)
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    @endif
                                </div>
                                <hr>
                                @foreach($comments as $comment)
                                    <p class="col-md-8">
                                        {{\Illuminate\Support\Facades\Auth::user("id",$comment->id)->name}} -->
                                        {{$comment->comment}}
                                    </p>
                                @endforeach
                                <form method="post" action="{{url("userComment")}}">
                                    <div class="d-flex justify-content-between align-items-center">
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <div class="form-group col-md-12">
                                                <label for="comment" class="text-warning">Comment ::</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="comment"></textarea>
                                            </div>
                                        @endif
                                    </div>
                                    @csrf
                                    <input type="hidden" name="commendable_id" value="{{$course->id}}">
                                    <input type="hidden" name="commendable_type" value="App\Course">
                                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                    <div class="row justify-content-end no-gutters">
                                        <button type="submit" class="btn btn-warning text-white mr-3 mb-3">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>
        </div>

@endsection

