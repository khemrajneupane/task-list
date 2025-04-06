{{-- @isset($name)
    Hello {{ $name }} !
@endisset

<div>
    hello from blade template
</div>

<div>

    <h1>Tasks lists:</h1>
    @forelse ($tasks as $task)
        <p>{{ $task->title }}</p>
    @empty
        <div>No tasks </div>
    @endforelse


    <div>There are no tasks</div>
  

</div> --}}

<div> Tasks </div>
<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No tasks </div>
    @endforelse
</div>
