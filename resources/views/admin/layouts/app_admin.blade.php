<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="app">
        
            
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
             

                    <!-- Branding Image -->
               
                

       
                    <!-- Left Side Of Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-4">
                    <div class="container">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                            <li class="nav-item "><a class="nav-link text-white" href="{{route('admin.index')}}">Панель состояния</a></li>
                            <li class="nav-item "><a class="nav-link text-white" href="{{route('admin.product.index')}}">Заявки</a></li>
                            <li class="nav-item "><a class="nav-link text-white" href="{{route('admin.article.index')}}">Материалы</a></li>
                            <li class="nav-item "><a class="nav-link  text-white" href="{{route('admin.category.index')}}">Категории</a></li>
                            <li class="nav-item "><a class="nav-link text-white" href="{{route('admin.catalog.index')}}">Каталог</a></li>
                            
                       </ul> 
                      </div> 
                    </div>
                    </nav>
                    <!-- Right Side Of Navbar -->
                    </div>
                
          
       

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $( document ).ready(function(){
   
    CKEDITOR.replace( 'description' );
});</script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}" defer></script>

</body>
</html>