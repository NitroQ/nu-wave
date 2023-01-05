@extends('template.main')

@section('title', 'NU Wave | Article')
@section('css')
<style>
.h-b{
    color: white;
    text-shadow: 3px 2px #1F4E79;
}

.inf{
    font-family: 'Montserrat', sans-serif;
    font-style: italic;
    font-weight: 700;
    color: #1F4E79;
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
                    <h1 class="h-b h1 mt-2">{{ $products->title }}</h1>
                    <small class="text-muted mt-2 fw-semibold">{{ $products->tag }}</small>
                    <h6 class="h6 text-muted fw-bold mt-2"> Published {{ $products->date != null ?  \Carbon\Carbon::parse($products->date)->format('F j, Y') : $products->created_at->format('F j, Y') }}</h6>
                     <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-3">
                            <button class="btn btn-dark  background-blue rounded-pill p-2 px-5 mt-3 fw-bold">{{ $products->category }}</button>
                        </div>
                        @if(!empty($products->shop))
                       <div class="col-lg-3 mt-3">
                        <a href="{{ $products->shop }}" target="_block" class="text-decoration-none ms-2 h5"><i class="fa-solid fa-basket-shopping"></i> Buy it on NU Wave Shop</a>
                       </div>
                       @endif
                     </div>
                </div>
              </div>
    
    
            </div>
        </div>
    
    </div>
    <div class = "row justify-content-center">
        <div class = "col-lg-9 mt-5">
            <div class="d-flex justify-content-center">
                    <img src="/uploads/products/{{ $products->image or 'placeholder.png' }}" class="img-fluid rounded">
            </div>
        </div>
    </div>
    
    <div class="container mt-5 pt-5 ">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="inf"> Abstract</h1>
            </div>
            <div> {!! $products->abstract !!}</div>
        </div>
    </div>
    <div class="container mt-5 pt-5 ">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="inf"> Purpose</h1>
            </div>
            <div> {!! $products->purpose!!}</div>
        </div>
    </div>
</div>

@endsection