<div class="container py-1 mb-5">
    <h2 class="text-warning m-5 text-center">Pay Courses</h2>
    @foreach($errors as $error)
        <p>{{$error}}</p>
    @endforeach
    <div class="row col-md-12">
        <ul class="list-group col-md-6">
            <li class="list-group-item bg-warning text-white">These are Pay Courses</li>
        @foreach($courses as $course)
                @if($course->category == "Pay Course")
                    <li class="list-group-item"><a href="{{ url("/courses") }}" class="text-dark">-> {{$course->type}}</a></li>
                @endif
            @endforeach
            <li class="list-group-item"><a href="{{url("/courses")}}" class="text-warning">{{ __('-> SEE MORE') }}</a></li>
        </ul>
        <img src="{{asset("/img/logo.jpeg")}}" alt="..." class="col-md-6 rounded-left">
    </div>
</div>

