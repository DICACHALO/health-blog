@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
    <div class="container">
    <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-2 ">
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

@endsection
