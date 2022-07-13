@extends("layout.master")
@section("title","Post")
@section("content")
    <div class="container col-md-7">
        <form method="post" class="p-5 border m-5" enctype="multipart/form-data">
            <h2 class="text-warning text-center">Post Edit</h2>
            @csrf
            @foreach($errors->all() as $error)
                <p class="alert-danger p-2 text-white">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title"  name="title" value="{{$course->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option>Free Course</option>
                </select>
            </div>
            <div class="form-group">
                <label for="link">Resource-Link</label>
                <input type="text" class="form-control" id="link"  name="link" value="{{$course->link}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$course->description}}</textarea>
            </div>
            <div class="custom-file mt-3 mb-3">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file[]" multiple required>
                <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Update</button>
            </div>
        </form>
    </div>
@endsection


