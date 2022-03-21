<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@foreach($result as $post)
    <section class="content container-fluid">
    <div class="container m-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <div class="float-left">
                                <span class="card-title"> <h4>{{$post->title}}</h4></span>
                            </div>
                        </div>       
                        <div class="card-body">
                            <div class="form-group">
                                <p>{{$post->description}}</p>
                            </div>
                            <div class="form-group">
                            <p><i>Fecha: {{$post->published_at}}</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endforeach
    </body>
</html>