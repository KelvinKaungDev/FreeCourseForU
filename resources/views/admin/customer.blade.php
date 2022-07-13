<div class="table-responsive customer" id="customer">
    <h2 class="text-warning">Classes</h2>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->name}}</td>
            <td>{{$class->location}}</td>
            <td>
                <a href="{{url("admin/editClass/".$class->id)}}"><i class="fa fa-edit fa-lg text-warning"></i></a>
                <a href="{{url("admin/deleteClass/".$class->id)}}"><i class="fa fa-minus-square fa-lg text-danger"></i></a>
            </td>
        </tr>
        @endforeach 
        </tbody>
    </table>
</div>


