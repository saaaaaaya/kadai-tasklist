@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <h1>タスク新規作成ページ</h1>
    
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6" >
                {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
                    <div class="form-group">
                        {!! Form::label('status', 'ステータス:') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">    
                        {!! Form::label('content', 'タスク:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
             </div>
        </div>
    @else
        {{ print('<h2 class="alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>You are not authorized for that action!</h2>')}}
    @endif
@endsection