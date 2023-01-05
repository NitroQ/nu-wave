@extends('template.main')

@section('title', 'NU Wave | Innovators')
@section('css')
<style>
.h-b{
    color: #1F4E79;
}
#position{
    font-family: 'Montserrat', sans-serif;
}
#info{
    background-image: linear-gradient(to bottom, rgb(31, 78, 121, 0.5),#FFFFFF);
}
</style>

@endsection

@section('main-content')

<div class="container-fluid" id="info">
    <div class="container">
        <div class="pt-5 row">
                <div class="container-fluid mt-5">
                    <div class="row d-flex align-items-center justify-content-center g-5">
                        <div class="col-lg-5">
                            <img src="/uploads/innovators/{{ $innovators->image or 'placeholder.png' }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-lg-6 text-lg-start text-center">
                            <h2 class="h-b mt-lg-2 mt-4">{{ $innovators->iname }}</h2>
                            <h5 class="text-dark fw-bold fst-italic" id="position">{{ $innovators->position }}</h5>
                            <small class="h6 text-muted mt-2 fw-semibold">{{ $innovators->tag }}</small>
                            <h6 class="h6 text-muted fw-bold mt-2"> Published {{ $innovators->date != null ?  \Carbon\Carbon::parse($innovators->date)->format('F j, Y') : $innovators->created_at->format('F j, Y') }}</h6>
                            <h1> @if(!empty($innovators->facebook))
                                <a target="_blank" href="{{ $innovators->facebook }}"><i class="fab fa-facebook-square fs-1 text-dark"></i></a> 
                                 @endif
                                 @if(!empty($innovators->linkedin))
                                <a target="_blank" href="{{ $innovators->linkedin }}"><i class="fab fa-linkedin fs-1 text-dark"></i></a>
                                @endif
                                @if(!empty($innovators->youtube))
                                <a target="_blank" href="{{ $innovators->youtube }}"><i class="fab fa-youtube text-dark"></i></a>
                                @endif
                                @if(!empty($innovators->linkedin))
                                <a target="_blank" href="mailto:{{ $innovators->linkedin }}"><i class="fas fa-envelope text-dark"></i></a>
                                @endif
                                @if(!empty($innovators->website))
                                <a target="_blank" href="{{ $innovators->website }}"><i class="fas fa-globe-americas text-dark"></i></a> 
                                @endif</h1>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="h-b"> About</h1>
        </div>
        <div> {!! $innovators->about !!}</div>
    </div>
</div>
<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="h-b"> Accomplishments</h1>
        </div>
        <div> {!! $innovators->accomplishments !!}</div>
    </div>
</div>

@endsection