<?php

use Illuminate\Support\Facades\Route;


class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/', function () use ($tasks) {
    return view('index', [
        'tasks'=>$tasks
    ]);
}) -> name('task.index');

Route::get('/hello', function () {
    return "Hello page again finally";
});

Route::get('/{id}', function($id) {
    return 'One single tasks';
})->name('task.show');







Route::get('/hallow', function () {
    return redirect('/hello');// redirecting to /hello from /hallow
})->name('helloroute');

Route::get('/hi', function () {
    return redirect()->route('helloroute');// first it checks url name helloroute then it goes to /hallow route, however this is redirected to /hello route and the contents from there is visible in the page.
});


Route::get('/greet/{name}', function ($name) {
    return 'Hello '. $name . "!";
});
//if no reoutes are defined so instead of 404 we can use some fallback.
Route::fallback(function () {
    return 'The page you are looking for does not exist!';
});
/*
Route::get('/', function () {
   return view('index');
});*/


