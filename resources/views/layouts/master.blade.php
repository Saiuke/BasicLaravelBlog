<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

<body>
  <div class="container">
    @include('layouts.nav')
  </div>
  <div role="main" class="container">
      <div class='row justify-content-center'>
      @if ($message = session('message'))          
        <div class="alert alert-primary col-md-8" id="flash-notification" role="alert">
          {{$message}}
        </div>
      @endif
        @yield('content')
        @include('layouts.sidebar')
      </div>
  </div>
      @include('layouts.footer')
</body>
</html>
