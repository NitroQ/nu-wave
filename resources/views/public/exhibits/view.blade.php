
@extends('template.main')

@section('title', 'NU Wave | Innovators')
@section('css')
<style>
.h-b{
    color: #1F4E79;
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
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <img src="/uploads/exhibits/{{ $exhibits->image or 'placeholder.png' }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="h-b mt-2">{{ $exhibits->title }}</h2>
                            <small class="h6 text-muted mt-2 fw-semibold">{{ $exhibits->tag }}</small>
                            <h6 class="h6 text-muted fw-bold mt-2"> Published {{ $exhibits->date != null ?  \Carbon\Carbon::parse($exhibits->date)->format('F j, Y') : $exhibits->created_at->format('F j, Y') }}</h6>
                             <div class="row text-center">
                                <button class="btn btn-dark background-blue rounded-pill p-2 px-3 mt-3 fw-bold">Construction/Tools</button>
                                <a href="" class="text-decoration-none ms-2 mt-4 h5"><i class="fa-solid fa-basket-shopping"></i> Buy it on NU Wave Shop</a>
                             </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="h-b"> Abstract</h1>
        </div>
        <div> {!! $exhibits->abstract !!}</div>
    </div>
</div>
<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="h-b"> Purpose</h1>
        </div>
        <div> {!! $exhibits->purpose!!}</div>
    </div>
</div>
<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="h-b"> Principal Authors</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 border border-2 border-secondary rounded-3 p-3 m-2" >
                        <h5 class="fw-bold">Frank Vincent Gesmundo</h5>
                        <small class="fw-light">CCIT Student</small>
                    </div> 
                    <div class="col-3 border border-2 border-secondary rounded-3 p-3 m-2">
                        <h5 class="fw-bold">Frank Vincent Gesmundo</h5>
                        <small class="fw-light">CCIT Student</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection