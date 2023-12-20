@include('Pages.header')

<h1 class="text-center m-5">Category Listing</h1>

<style>
.article-list {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .article-item {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .article-item h3 {
    margin: 0;
  }

  .article-item a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
  }
</style>
<a href="{{route('category.create')}}" class="btn btn-success float-end " style="margin-right: 50px">Create Category</a>

@if($message = Session::get('message'))
        <p style="text-align: center">{{ $message }}</p>
@endif
@foreach ($categories as $category)

<div class="article-list">
    <div class="article-item">
      <h3>{{$category->category}}</h3>
      <a href="{{route('category.edit',$category->id)}}">Edit</a>
      <a href="{{route('category.delete',$category->id)}}">Delete</a>

    </div>
</div>
@endforeach

@include('Pages.footer')