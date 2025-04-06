@extends('layouts.app')

@section('title', 'List of Tasks')
@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No tasks </div>
    @endforelse
@endsection
