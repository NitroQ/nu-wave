@extends('template.main')

@section('css')
    
<style>
    #article-img{
        height: 200px;
        object-fit: cover;
        border-radius: 5px;
    }
@media (min-width: 976px) {
    #banner{
        height: 40vh;
        background-size: cover;
        background-image: linear-gradient(0deg, #2634B2, transparent), url('/images/carousel1.png');
        background-position: center;
    }
}
@media  (max-width: 975px) {
    #banner{
        height: 20vh;
        background-size: cover;
        background-image: linear-gradient(0deg, #2634B2, transparent), url('/images/carousel1.png');
        background-position: center;
    }
}
</style>
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" id="banner">
        <div class="col-lg-6 text-left">
            <h1 class=" mt-5 h-b text-white">Centie Innovators</h1>
       </div>
    </div>
</div>
    <div class="container pb-5 pt-3">
      <div class="row justify-content-center">
          <div class="col-lg-8">
            @foreach ($innovators as $a)
            <div class="row border border-2 rounded py-3 mt-3">
                <div class="col-lg-4 d-flex justify-content-center" >
                    <img src="/uploads/articles/{{ $a->image or 'placeholder.png' }}" alt="" id="article-img" class="img-fluid">
                </div>
                <div class="col-lg-8" >
                    <div class="container pt-5 pt-lg-0">
                        <h5 class="fw-bold">{{ $a->title }}</h5>
                        <small class="date-sm">{{ $a->created_at->format('F j, Y') }} &nbsp; {{ $a->category }} </small> <br>
                        <small class="date-sm">{{ $a->tag }}</small>
                        <p>{!! mb_strimwidth(strip_tags($a->description), 0, 220, '...') !!}</p>
                        <a href="{{ route('article-view' , [$a->id]) }}">Read Details ></a>
                    </div>
                    
                </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
   
@endsection