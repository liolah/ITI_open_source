<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','Home Page')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .content{
      margin: 20% 40%;
      color: grey;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">HESHAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tuts')}}">Tutorials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('designs')}}">Designs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('projects')}}">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('resume')}}">About Me</a>
      </li>
    </ul>
    <a class="navbar-text" href="{{route('register')}}">
      Register
    </a>
  </div>
</nav>
<div class="content">
  @section('content')
  <div>
      Welcome from home page!
  </div>
  @show
</div>
</body>
</html>