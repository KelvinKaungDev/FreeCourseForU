@extends("layout.master")
@section("title","Login")
@section("content")
    <div class="container mt-5 col-md-6 border p-5">
        <h2 class="text-center text-warning">User Login</h2>
        <form method="post" class="p-2">
        {{csrf_field()}}
        @foreach($errors->all() as $error)
            <p class="alert-danger p-3">{{$error}}</p>
        @endforeach
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="row justify-content-end no-gutters">
            <button type="submit" class="btn btn-primary ">Cancel</button>
            <button type="submit" class="btn text-white btn-warning ml-3">Login</button>
        </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
    </div>
@endsection

