<x-app-layout>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>De4</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
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
</x-app-layout>
