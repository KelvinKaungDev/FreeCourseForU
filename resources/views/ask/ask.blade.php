<div class="container py-1 mb-5">
    <h2 class="text-warning m-5 text-center">Ask Question</h2>
    @foreach($errors as $error)
        <p class="alert-danger p-2" >{{$error}}</p>
    @endforeach
    <div class="row">
        <form class="col-md-6" method="post" action="{{url("/ask")}}">
            {{csrf_field()}}
            @if(session("success"))
                <p class="alert-success p-2 text-white" >{{session("success")}}</p>
            @endif
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="number">Ph number</label>
                    <input type="text" class="form-control" id="number" placeholder="ph number" name="ph_number">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Question</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="question"></textarea>
                </div>
            </div>
            <div class="row no-gutters">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </form>
        <img src="{{asset("/img/logo.jpeg")}}" alt="..." class="col-md-6 rounded-left">
    </div>
</div>

