@extends('template.main')

@section('main-content')
    @foreach ($articles as $a)
    <div class="container p-5">
        <div class="row border border-dark rounded p-3">
            <div class="col-lg-3 d-flex justify-content-center" >
                <img src="/uploads/articles/{{ $a->image or 'placeholder.png' }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-9" >
                <div class="container pt-5 pt-lg-0">
                    <h6>{{ $a->title }}</h6>
                    <small class="date-sm">{{ $a->created_at->format('F j, Y') }}</small>
                    <p>{!! strip_tags($a->description) !!}</p>
                    <a href="{{ route('article-view' , [$a->id]) }}">Read Details ></a>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
@endsection