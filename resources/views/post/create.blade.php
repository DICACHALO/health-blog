@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 class="px-4 text-6xl break-words">Crear Post</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <label class="m-2" for="title" >{{ __('Título del post') }}</label>
                        
                        <input class="form-control m-2" type="text" name="title" value="{{ old('title') }}" placeholder="Write the title of the post">
                        <label class="m-2" for="description" >{{ __('Descripción') }}</label>

                        <textarea class="form-control m-2" name="description" placeholder="Write your post here" required></textarea>
                    
                        <input type="submit" value="Guardar" class="btn-primary m-2 p-2 cursor-pointer border rounded">
                        @if (session('status'))
                            <div class="w-full bg-green-500 p-2 text-center my-2">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="w-full bg-red-500 p-2 text-center my-2">
                                {{$errors->first()}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection