<div class="table-responsive roles" id="roles">
    <h2 class="text-warning">Roles</h2>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>
                    <a href="{{url("admin/deleteRole/".$role->id)}}"><i class="fa fa-minus-square fa-lg text-danger"></i></a>
                </td>
        @endforeach
        </tbody>
    </table>
</div>



