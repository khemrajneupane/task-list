<h1>
    Lists of tasks:
</h1>
<div>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('something.show',['id'=> $task->id])}}">{{$task -> title}}</a>
        </div>
    @empty

    @else
    <div>
        There are no tasks
    </div>
    @endforelse

</div>
