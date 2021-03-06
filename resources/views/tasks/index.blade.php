@extends('layouts.app')

@section('content')

@if (Auth::check())
<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
        </thead> 
        <tbody>
            @foreach ($tasks as $task)
                 <tr>
                        <td>{!! link_to_route('tasks.show',"更新", ['id' => $task->id], ['class' => 'btn btn-primary'] ) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
            @endforeach
        </tbody>
    @endif

     {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
@else
<h1>タスクリスト</h1>
    {!! link_to_route('signup.get', 'Signup', null, ['class' => 'btn btn-lg btn-primary']) !!}
    {!! link_to_route('login', 'Login', null, ['class' => 'btn btn-lg btn-primary']) !!}
@endif    
    

@endsection