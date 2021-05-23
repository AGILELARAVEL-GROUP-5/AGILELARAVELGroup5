<!DOCTYPE html>
<html lang="en">
<head>
  <title>AGILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .img1 {
    height: 450px;
    
  }
  .img2 {
    height: 1050px;
    
  }
  div {
  text-align: justify;
  text-justify: inter-word;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>The AGILE Development Framework</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand">AGILE Development Framework</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('method')}}">Methodology</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('stages')}}">Stages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('principle')}}">Principle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('process')}}">Process</a>
      </li>          
    </ul>
  </div>  
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">

  @yield('content')

</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>© Copyright 2021</p>
</div>

</body>
</html>
