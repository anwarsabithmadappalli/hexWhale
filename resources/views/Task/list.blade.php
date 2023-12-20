@include('Pages.header')

<h1 class="text-center m-5">Task Listing</h1>

<style>
  .article-list {
    max-width: 600px;
    margin: 20px auto;
    background-color: #f8f9fa; /* Light gray background */
  }

  .article-item {
    padding: 20px;
    margin: 10px;
    background-color: #fff; /* White background */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .article-item:hover {
    transform: translateY(-5px);
  }

  .article-item h5 {
    margin: 0;
    font-size: 18px;
  }

  .article-item a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
    margin-right: 10px;
    transition: color 0.3s ease-in-out;
  }

  .article-item a:hover {
    color: #2078c8; /* Darker blue on hover */
  }
</style>

@if($message = Session::get('message'))
  <p style="text-align: center; color: green;">{{ $message }}</p>
@endif

@foreach ($tasks as $task)
  <div class="article-list">
    <div class="article-item">
      <h5>User: {{ $task->registration->name }}</h5>
      <h5>Task: {{ $task->taskName }}</h5>
      <h5>Category: {{ $task->category->category }}</h5>
      <a href="{{ route('task.view', $task->id) }}">Read more</a>
      <a href="{{ route('task.edit', $task->id) }}">Edit</a>
      <a href="{{ route('task.delete', $task->id) }}">Delete</a>
    </div>
  </div>
@endforeach

@include('Pages.footer')
