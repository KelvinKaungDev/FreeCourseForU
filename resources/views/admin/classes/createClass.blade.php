@extends("layout.master")
@section("title","Post")
@section("content")
    <div class="container col-md-7">
        <form method="post" class="p-5 border m-5" enctype="multipart/form-data">
            <h2 class="text-warning text-center">Create Classes</h2>
            @csrf
            @foreach($errors->all() as $error)
                <p class="alert-danger p-2 text-white">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name="name">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location"  name="location">
            </div>
            <div class="form-group">
                <label for="ph_number">Ph_number</label>
                <input type="text" class="form-control" id="ph_number"  name="ph_number">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="custom-file mt-3 mb-3">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file[]" multiple>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Create</button>
            </div>
        </form>
    </div>
@endsection


