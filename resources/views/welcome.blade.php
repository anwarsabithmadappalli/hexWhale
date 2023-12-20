@include('pages.header')

<div style="
    margin: 20px;
    text-align: center;
    background-color: #f3e308;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 50px 500px;
    font-size: 30px;
    color: #333;
    font-style: italic;
    font-weight: bold;
">
    Welcome, {{ session('user.name') }}!
</div>

<div style="text-align: center;">
    <a class="btn btn-success" href="{{ route('category.create') }}">Create Category</a>

    <a class="btn btn-success" href="{{ route('task.create') }}">Create Task</a>
</div>
<div style="text-align: center ;margin-top:20px;">
    <a class="btn btn-success" href="{{ route('category.list') }}">List Category</a>

    <a class="btn btn-success" href="{{ route('task.list') }}">List Task</a>
</div>

@include('pages.footer')
