@include('Pages.header')


<h2 class="text-center">Task Details</h2>
<div class="container mt-5">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Task Name: {{ $task->taskName }}</h5>
            <p class="card-text">Task Description: {{ $task->taskDescription }}</p>
            <p class="card-text"><strong>Category: </strong> {{ $task->category->category }}</p>
            <p class="card-text"><strong>Date: </strong> {{ $task->taskDate }}</p>

        </div>
    </div>
    


</div>
<div class="text-center">
<a href="" class="btn btn-success mt-3">Back to Article List</a></div>
@include('Pages.footer')
