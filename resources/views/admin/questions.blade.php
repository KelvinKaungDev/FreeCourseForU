<div class="table-responsive questions" id="questions">
    <h2 class="text-warning">Questions</h2>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Ph_number</th>
            <th>Question</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->name}}</td>
                <td>{{$question->ph_number}}</td>
                <td>{{substr($question->question,1,300)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


