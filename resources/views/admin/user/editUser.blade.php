@extends("layout.master")
@section("title","Post")
@section("content")
    <div class="container col-md-7">
        <form method="post" action="{{url("editUser/$user->id")}}" class="p-5 border m-5" enctype="multipart/form-data">
            <h2 class="text-warning text-center">Edit User</h2>
            @csrf
            @foreach($errors->all() as $error)
                <p class="alert-danger p-2 text-white">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Roles</label>
                <select class="form-control" id="exampleFormControlSelect1" name="role">
                    @foreach($roles as $role)
                        <option>{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Create</button>
            </div>
        </form>
    </div>
@endsection



