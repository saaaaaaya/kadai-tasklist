@extends('layouts.app')

@section('content')
    @if (Auth::user()->id == $task->user_id)
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th class="text-center">id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th class="text-center">ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th class="text-center">タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>


    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-info']) !!}

        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @else
        {{ print('<h2 class="alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>You are not authorized for that action!</h2>')}}
    @endif
@endsection
