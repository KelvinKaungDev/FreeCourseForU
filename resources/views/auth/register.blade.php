@extends("layout.master")
@section("title","Register")
@section("content")
    <div class="container mt-5 col-md-6 border p-5">
        <h2 class="text-center text-warning">User Register</h2>
        <form method="post" action="{{url("/register")}}" class="p-2">
            {{csrf_field()}}
            @foreach($errors->all() as $error)
                <p class="alert-danger p-3">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter name" name="name" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Retype Password" id="password" name="password_confirmation">
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Register</button>
            </div>
        </form>
    </div>
@endsection
