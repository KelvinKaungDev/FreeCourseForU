@extends("layout.master")
@section("title","Home")
@section("content")
    <div class="container col-md-7 create_Role" id="create_Role">
        <form method="post" action="{{url("/role")}}" class=" p-5 border m-5">
            <h2 class="text-warning text-center">User Role</h2>
            {{csrf_field()}}
            @foreach($errors->all() as $error)
                <p class="alert-danger p-3">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role"  name="role">
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Create</button>
            </div>
        </form>
    </div>
@endsection

