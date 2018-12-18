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
            <td>
                {!! Form::open(['route' => ['admin.quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.quizzes.show', [$quiz->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('admin.quizzes.edit', [$quiz->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
