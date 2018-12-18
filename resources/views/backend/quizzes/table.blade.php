<table class="table table-responsive" id="quizzes-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Teaser</th>
        <th>User Id</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($quizzes as $quiz)
        <tr>
            <td>{!! $quiz->title !!}</td>
            <td>{!! $quiz->description !!}</td>
            <td>{!! $quiz->teaser !!}</td>
            <td>{!! $quiz->user_id !!}</td>
            <td>{!! $quiz->img !!}</td>
            <td>{!! $quiz->action_buttons !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
