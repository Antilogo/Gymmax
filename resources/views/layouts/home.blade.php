<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De4</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('assets/libs/fontawesome5/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/slick/slick-theme.css')}}">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('./assets/libs/slick/slick.min.js')}}"></script>
  </head>
  <body>
    @include('Client.bloc.header')
    
    @include('Client.base.main')
    
    @include('Client.bloc.footer')
    
    <script src="{{asset('assets/js/script.js')}}"></script>

  </body>
</html>