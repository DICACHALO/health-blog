@extends('layouts.app')

@section('content')
<section class="content container-fluid">
    <div class="container m-1 ">
        <div class="card ">
            <div class="card-body ">
            <form method="POST" action="{{route('posts_search') }}" >
                @csrf
                    <label class="p-1 ">Selecciona una fecha inicial:</label>
                    <input name="date_ini" value="date" type="date"  id="date_ini" >
                    <label class="p-1">Selecciona una fecha final:</label>
                    <input name="date_finish" value="date" type="date"  id="date_finish" >&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-warning p-1" target="_blank">&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                    </svg>&nbsp;&nbsp; Buscar posts &nbsp;&nbsp;</button>
                </form>
            </div>
        </div>
    </div>
</section>
 
@foreach($posts as $post)
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

@endsection

