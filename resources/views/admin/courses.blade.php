<div class="table-responsive free_Course" id="courses">
    <h2 class="text-warning">Courses</h2>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->title}}</td>
                <td>{{$course->link}}</td>
                <td>
                    <a href="{{url("admin/editCourse/".$course->id)}}"><i class="fa fa-edit fa-lg text-warning"></i></a>
                    <a href="{{url("admin/deleteCourse/".$course->id)}}"><i class="fa fa-minus-square fa-lg text-danger"></i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>


