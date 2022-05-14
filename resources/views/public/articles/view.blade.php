@extends('template.main')

@section('main-content')

<div class="row">
    <div class="col">
        <img src="/uploads/articles/{{ $article->image or 'placeholder.png' }}" class="buildkit-image">
    </div>
</div>

<div class = "row justify-content-center">
    <div class = "col-lg-5 py-5">
        <h1 class="subheadliner text-center">{{ $article->title }}</h1>
        <p class="text-center">Posted on: {{ $article->created_at->format('F j, Y') }}</p>

        <div class="my-5">
            {!! $article->description !!}
        </div>



    </div>
</div>

@endsection