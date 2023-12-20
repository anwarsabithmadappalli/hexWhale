@include('pages.header')
<h2 class="text-center mt-4" style="font-size:43px">Task Information</h2>
<a href="{{route('task.list')}}" class="btn btn-success float-end mx-5 ">Task List</a>
<div class="container mt-5">

    <form action="{{route('task.save')}}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="">Task Name:</label>
            <input type="text" class="form-control" name="taskName" id="taskName" placeholder="Enter article name">
        </div>
        <div class="form-group mt-2">
            <label for="">Description:</label>
            <textarea class="form-control" name="taskDescription"  id="taskDescription" rows="3" placeholder="Enter article description"></textarea>
        </div>
        <div class="form-group mt-2">
            <label for="">Due Date:</label>
            <input type="date" class="form-control" name="taskDate" id="taskDate">
        </div>
        <div class="form-group">
            <label for="">Select Category:</label>
            <select class="form-control" name="category" id="category">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach

            </select>
        </div>
        <div class="text-center p-5">
            <button type="submit" class="btn btn-success" onclick="validateForm()">Submit</button>
        </div>
    </form>
</div>


<script>
           function validateForm() {

            var taskName = document.getElementById('taskName').value.trim();
            if (taskName === '') {
                alert('Please enter Task Name.');
                event.preventDefault();
                return;
            }


            var taskDescription = document.getElementById('taskDescription').value.trim();
            if (taskDescription === '') {
                alert('Please enter Description.');
                event.preventDefault();
                return;
            }

            var taskDate = document.getElementById('taskDate').value.trim();
            if (taskDate === '') {
                alert('Please select Due Date.');
                event.preventDefault();
                return;
            }

            var category = document.getElementById('category').value.trim();
            if (category === '') {
                alert('Please select a Category.');
                event.preventDefault();
                return;
            }
        }

</script>


@include('pages.footer')
