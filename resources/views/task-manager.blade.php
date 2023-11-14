<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task-Manager</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div style="display: flex; justify-content: center">
    <h1>Task Manager</h1>
  </div>

  <div style="display: flex; justify-content: center">
    <form action="{{ route('tasks.store') }}" method="post">
      @csrf
      <input type="text" name="title">
      <button type="submit">Add Task</button>
    </form>
  </div>
  <div style="display: flex; justify-content: center">
    <ul>
      @foreach ($tasks as $task)
          <li>{{ $task->title }} - {{ $task->completed ? 'Completed' : 'Pending' }}</li>
      @endforeach
    </ul>
  </div>
</body>
</html>