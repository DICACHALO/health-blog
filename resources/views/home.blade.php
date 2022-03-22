@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard member') }}</div>
                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('posts.create') }}" class="btn btn-success"  data-placement="left">
                                {{ __('Crear post') }}
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
           
    @foreach($posts as $post)
    <section class="content container-fluid">
    <div class="container m-1">
        <div class="row">
            <div class="col-md-12">
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
                            <p><i>Fecha: {{$post->created_at}}</i></p>
                            </div>
                        </div>
                    
                </div>
            </div>
        </section>
    </div>
    @endforeach

@endsection
