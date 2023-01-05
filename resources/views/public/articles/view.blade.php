@extends('template.main')

@section('title', 'NU Wave | Article')
@section('css')
<style>
.h-b{
    color: white;
text-shadow: 3px 2px #1F4E79;
}

#info{
    background-image: linear-gradient(to bottom, rgb(31, 78, 121),#FFFFFF);
}
</style>

@endsection

@section('main-content')

<div class="container-fluid">
    <div class="row" id="info">
        <div class="container-fluid">
            <div class="row mt-3 pt-5  justify-content-center">
              <div class="col-lg-9 text-center ">
                <div class="row  justify-content-center">
                   <h1 class="h1 h-b ">{{ $article->title }}</h1>
                    <h6 class="h6 text-muted fw-semibold">{{ $article->tag }}</h6>
                    <h6 class="h6 text-dark fw-bold mt-2">by {{ $article->author }}</h5>
                    <small class="text-muted fw-semibold mb-lg-5 mb-3"> Published {{ $article->date != null ?  \Carbon\Carbon::parse($article->date)->format('F j, Y') : $article->created_at->format('F j, Y') }}</small>
                   
                </div>
              </div>
    
    
            </div>
        </div>
    
    </div>
    <div class = "row justify-content-center">
        <div class = "col-lg-9 mt-3">
            <div class="d-flex justify-content-center">
                    <img src="/uploads/articles/{{ $article->image or 'placeholder.png' }}" class="img-fluid rounded">
            </div>
        </div>
    </div>
    
    <div class = "row justify-content-center">
        <div class = "col-lg-9 py-5">
            <div class="my-5">
                {!! $article->description !!}
            </div>
        </div>
    </div>
</div>

@endsection