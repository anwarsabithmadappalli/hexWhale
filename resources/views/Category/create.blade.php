@include('pages.header')


<div class="container mt-5">
    <div class="text-center p-5">
    <h2>Category Information</h2>
    <a href="{{route('category.list')}}" class="btn btn-success float-end mx-5 ">Category List</a>

    </div>
    
    <form action="{{route('category.save')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="">Category Name:</label>
        <input type="text" class="form-control" name="Category" id="Category" placeholder="Enter Category name">
      </div>
      <div class="text-center p-5">
        <button type="submit" class="btn btn-primary" onclick="validateForm()">Submit</button>
      </div>
      </form>
    </div>

<script>
    function validateForm(){

      var category = document.getElementById('Category').value.trim();
            if (category === '') {
                alert('Please Enter A Category.');
                event.preventDefault();
                return;
            }
    }
  </script>

@include('pages.footer')