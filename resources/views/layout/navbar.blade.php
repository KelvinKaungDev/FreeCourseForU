<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <img src="{{asset("img/notebook-336634_1920.jpg")}}" alt="" width="80" height="80" class="rounded-circle" id="brand-name">
        <span class="ml-3 navbar-brand text-warning logo">{{ __('FREE_COURSE_4_U') }}</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a
                        href="{{ route('home.index') }}"
                        class="nav-link home @if(Request::segment(1) === 'home' || !Request::segment(1)) text-warning @else text-secondary @endif  mr-4"
                    >
                    <i class="fa fa-home fa-2x mr-1"></i>
                        {{ __('Home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a 
                        href="{{ route('service.index') }}"
                        class="nav-link content @if(Request::segment(1) === 'service') text-warning @else text-secondary @endif mr-4">
                        <i class="fa fa-handshake fa-2x mr-1"></i>
                        {{ __('Service') }}
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a 
                        href="#" 
                        id="navbarDropdown" 
                        role="button" 
                        data-toggle="dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle 
                        @if(Request::segment(1) === 'freeCourse' || Request::segment(1) === 'courses') text-warning @else text-secondary @endif mr-4
                            "
                    >
                        <i class="fa fa-book fa-2x mr-1"></i>Courses
                    </a>
                    <div class = "dropdown-menu" aria-labelledby    = "navbarDropdown">
                    <a   class = "dropdown-item  text-warning" href = "{{ route('freeCourse.index') }}">Free Course</a>
                    <a   class = "dropdown-item text-warning" href  = "{{  route('courses.index') }}">Pay Course</a>
                    </div>
                </li>

                <li class="nav-item dropdown">

                    <a 
                        href="#"
                        id="navbarDropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle
                                @if(Request::segment(1) === 'login' || Request::segment(1) === 'register') text-warning @else text-secondary @endif mr-4"
                     >
                        @if(\Illuminate\Support\Facades\Auth::check())
                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole("Admin"))
                                <i class="fa fa-address-book fa-2x mr-1"></i>Admin
                            @else
                                <i class="fa fa-address-book fa-2x mr-1"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}
                            @endif
                        @else
                            <i class="fa fa-address-book fa-2x mr-1"></i>Membership
                        @endif
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole("Admin"))
                                <a class="dropdown-item text-warning" href="{{url("admin/dashboard")}}">Dashboard</a>
                            @endif
                            <a class="dropdown-item text-warning" href="{{url("/logout")}}">Logout</a>
                        @else
                            <a class="dropdown-item  text-warning" href="{{url("/login")}}">Login</a>
                            <a class="dropdown-item text-warning" href="{{url("/register")}}">Register</a>
                        @endif
                    </div>

                </li>
                
            </ul>
        </div>
    </div>
</nav>
