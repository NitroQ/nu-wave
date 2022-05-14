@extends('template.main')

@section('main-content')

<style>
    #inner-car{
    height: 80vh; 
    object-fit:cover; 
}
</style>
<div class="row">
    <div class="col-lg-12" >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" id="inner-car">
            <div class="carousel-item active">
                <img src="/images/carousel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/carousel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/carousel3.png" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-6 text-left">
        <h1 class=" my-5 h-b">What is Code Juan</h1>
        <p>Code Juan aims to equip the public with the essential knowledge on Disaster Risk Reduction.
            Code Juan is developed to inform and encourage the Filipino people to prepare, respond and put emphasis on emergencies. And that is through having an updated background of latest announcements from Local Government units regarding human-induced or natural disasters. 
            Furthermore, it is a reference used for safety procedures, disaster management, contact services, and public directory.
        </p>
    </div>
</div>

<div class="row row-icn-icn justify-content-center px-3 my-5">
    <div class="col-lg-2 text-center">
        <i class="fas fa-user-shield"></i>        
        <br>
        <label>Safety</label>
        <br>
        <p>Find the evacuation areas near you! Know where to go in times of emergency.</p>
    </div>
    <div class="col-lg-2 text-center" id="mid-col">
        <i class="fas fa-brain"></i>
        <br>
        <label>Awareness</label>
        <br>
        <p>Be informed and increase disaster, risk, and threats literacy. </p>
    </div>
    <div class="col-lg-2 text-center">
        <i class="fas fa-briefcase-medical"></i>
        <br>
        <label>Essentials</label>
        <br>
        <p>Plan ahead and arm yourself with the essentials. Being prepared saves lives.</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-9 m-2 m text-left">
        <h1 class=" mt-5 h-b">Featured Articles</h1>
        <p>This is what we are up to. Be updated on what's new on our projects, activities and achievements.</p>
    </div>
</div>
<div class="row justify-content-center">
    @foreach ($articles as $a)
        <div class="col-lg-3">
            <div class="card alert-card">
                <div class="card-body">
                    <img src="/uploads/articles/{{ $a->image or 'placeholder.png' }}" class="card-img">
                    <small class="date-sm">{{ $a->created_at->format('F j, Y') }}</small>
                    <div class="w-100 text-center my-3">
                        <div style="height: 60px">
                            <h5 class="line-clamp">{{ $a->title }}</h5>
                        </div>
                        <p class="line-clamp">{!! strip_tags($a->description) !!}</p>
                        <a href="{{ route('article-view' , [$a->id]) }}">Read Details</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row justify-content-center">
    <div class="col-lg-9 text-left">
        <h1 class=" mt-5 h-b">Featured Products</h1>
        <p>Ideas, Innovations, Inventions, Creations.... <br>
            Browse through and take interest in the fruits of our innovator's relentless efforts to compete in the modern world.</p>
    </div>
</div>
<div class="row justify-content-center">
    @foreach ($products as $b)
        <div class="col-lg-3">
            <div class="card alert-card">
                <div class="card-body">
                    <img src="/uploads/articles/{{ $b->image or 'placeholder.png' }}" class="card-img">
                    <small class="date-sm">{{ $b->created_at->format('F j, Y') }}</small>
                    <div class="w-100 text-center my-3">
                        <div style="height: 60px">
                            <h5 class="line-clamp">{{ $b->title }}</h5>
                        </div>
                        <p class="line-clamp">{!! strip_tags($b->description) !!}</p>
                        <a href="{{ route('article-view' , [$b->id]) }}">Read Details</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row justify-content-center">
    <div class="col-lg-9 text-left">
        <h1 class=" mt-5 h-b">Featured Innovators</h1>
        <p>Meet and get to know one of the innovators that had contributed greatly to make NU WAVE a tsunami.</p>
    </div>
</div>
<div class="row justify-content-center mb-5 pb-5">
    @foreach ($innovator as $c)
        <div class="col-lg-3">
            <div class="card alert-card">
                <div class="card-body">
                    <img src="/uploads/articles/{{ $c->image or 'placeholder.png' }}" class="card-img">
                    <small class="date-sm">{{ $c->created_at->format('F j, Y') }}</small>
                    <div class="w-100 text-center my-3">
                        <div style="height: 60px">
                            <h5 class="line-clamp">{{ $c->title }}</h5>
                        </div>
                        <p class="line-clamp">{!! strip_tags($c->description) !!}</p>
                        <a href="{{ route('article-view' , [$c->id]) }}">Read Details</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>





@endsection