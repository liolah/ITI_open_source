<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','Home')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .foot{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 57px;
    }
  
  .sidebar{
    float: right;
    height: 700px;
    width: 250px;
    background-color: grey;
    color: white;
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
  }

  .content{
    margin: 17% 30%;
  }

  </style>
</head>
<body>
  <div class="sidebar">
  @section('sidebar')
  <div>
    Default sidebar content
  </div>
  @show
  </div>
  <header class="head">
    @include('layouts.header')
  </header>
  <div>
    <div class="content">
      @yield('content')
    </div>
  </div>
  <footer class="bg-light text-center text-lg-start foot">
    @include('layouts.footer')
  </footer>
</body>
</html>