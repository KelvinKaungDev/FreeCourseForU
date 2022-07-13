@extends("layout.master")
@section("title","Post")
@section("content")
    <div class="container col-md-7">
        <form method="post" class="p-5 border m-5" enctype="multipart/form-data">
            <h2 class="text-warning text-center">Create Free Courses</h2>
            @csrf
            @if(session("success"))
                <div class="alert alert-success" role="alert">
                    Create Successfully
                </div>
            @endif
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title"  name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option>Free Course</option>
                </select>
            </div>
            <div class="form-group">
                <label for="link">Resource-Link</label>
                <input type="text" class="form-control" id="link"  name="link">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="custom-file mt-3 mb-3">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file[]" multiple>
                <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Create</button>
            </div>
        </form>
    </div>
@endsection


