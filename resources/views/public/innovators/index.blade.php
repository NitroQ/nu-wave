@extends('template.main')

@section('css')
    
<style>
    #article-img{
        height: 250px;
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 5px;
    }
    .h-b{
        text-shadow: 5px 4px #1F4E79;
    }
@media (min-width: 976px) {
    #banner{
        height: 40vh;
        background-size: cover;
        background-image: linear-gradient(to bottom, rgb(31, 78, 121, 0.7),#FFFFFF), url('/images/nu-manila.png');
        background-position: center;
    }
}
@media  (max-width: 975px) {
    #banner{
        height: 20vh;
        background-size: cover;
        background-image: linear-gradient(to bottom,rgb(31, 78, 121, 0.7),#FFFFFF), url('/images/nu-manila.png');
        background-position: center;
    }
}
</style>
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" id="banner">
        <div class="col-lg-6 text-center">
            <h1 class=" mt-5 h-b display-3 text-light">Centie Innovators</h1>
       </div>
    </div>
</div>
<div class="container pb-5 pt-3">
    <div class="row justify-content-center ">
        <div class="col-lg-9">
          @foreach ($innovators as $a)
          <div class="row border border-2 rounded py-3 m-lg-0 mt-lg-3 m-3">
              <div class="col-lg-4 d-flex justify-content-center rounded" >
                  <img src="/uploads/innovators/{{ $a->image or 'placeholder.png' }}" alt="" id="article-img" class="img-fluid">
              </div>
              <div class="col-lg-8" >
                  <div class="row  pt-3 pt-lg-0">
                      <h5 class="fw-bold">{{ $a->iname }}</h5>
                      <small class="date-sm">  {{ $a->date != null ? \Carbon\Carbon::parse($a->date)->format('F j, Y') : $a->created_at->format('F j, Y') }} &nbsp; {{ $a->position }}</small> <br>
                      <small class="date-sm">{{ $a->tag }}</small>
                      <p class="">{!! mb_strimwidth(strip_tags($a->about), 0, 350, '...') !!}</p>
                      
                  </div>
                  <div class="row text-end" >
                      <div class="pe-3">
                          <a href="{{ route('innovator-view' , [$a->id]) }}" class="text-decoration-none color-blue fw-bolder">Read Details <i class="fas fa-chevron-circle-right ms-1"></i></a>
                      </div>
                  </div>
                  
              </div>
          </div>
          @endforeach
          <div class="d-flex flex-row mt-5">
            <nav class="mx-auto">{{ $innovators->links() }}</nav>
        </div>
        </div>
    </div>
  </div>
   
@endsection