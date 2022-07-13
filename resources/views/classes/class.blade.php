<div class="it-class py-5 mb-5 slide-up-animation">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2 mb-5">
                <h2 class="mb-4 mt-4">{{ __('မြန်မာနိုင်ငံအတွင်းရှိသောITသင်တန်းများ') }}</h2>
                <ul class="list-group">
                    <p class="list-group-item bg-warning text-white">These are IT Classes</p>
                    @foreach($classes as $class)
                        <li class="list-group-item"><span class="mr-3">-></span><a href="{{url("/classes")}}" class="class-list">{{$class->name}}</a></li>
                    @endforeach
                    <li class="list-group-item"><a href="{{url("/classes")}}" class="text-warning"> SEE MORE</a></li>
                </ul>
            </div>
            <div class="col-md-6 order-md-1">
                <img class="featurette-image img-fluid mx-auto rounded" src="{{asset('img/FE0C7549-C994-4343-833F-E6013037801F_1_105_c.jpeg')}}" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769dd64179%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769dd64179%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>
