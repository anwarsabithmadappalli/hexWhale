<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Task Manager</title>
</head>
<body style="background-color: rgb(204, 188, 97)">
<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand mx-5">Task Manager</a>
       
        <form class="form-inline" >
          <a class="btn btn-outline-success mx-5 my-sm-0 " href="{{route('welcome')}}" type="submit">Home</a>
          <a class="btn btn-outline-success mx-5 my-sm-0 " href="{{route('signOut')}}" type="submit">Sign Out</a>
        </form>
      </nav>
</header>