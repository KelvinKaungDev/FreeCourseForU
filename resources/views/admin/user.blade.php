<div class="table-responsive user_table" id="user_table">
    <h2 class="mt-3 mb-3 text-warning">User List</h2>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{url("admin/deleteUser/$user->id")}}"><i class="fa fa-minus-square fa-lg text-danger"></i></a>
                    <a href="{{url("admin/editUser/$user->id")}}"><i class="fa fa-edit fa-lg text-warning"></i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

