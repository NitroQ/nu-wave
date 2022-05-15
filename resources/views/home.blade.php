@extends('template.main')

@section('main-content')

<style>
    #inner-car{
    height: 65vh; 
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
<div class="container-fluid">
    
<div class="row justify-content-center">
    <div class="col-lg-6 text-center text-lg-start">
        <h1 class=" my-5 h-b">Welcome to NU Wave!</h1>
        <p>NU Wave is the pinnacle of innovation in National University where projects are being developed and improved to showcase the best of the best in NU. The Center for Innovation and Entrepreneurship is the vehicle of National University in the creation of a Leading Innovation Culture within the University. Ultimately, the Center will facilitate the innovation process of bringing the idea to market.
        </p>
    </div>
</div>

<div class="row row-icn-icn justify-content-center px-3 my-5">
    <div class="col-lg-2 text-center">
        <i class="fas fa-shopping-cart"></i>
        <br>
        <label>eCommerce Platform</label>
        <br>
        <p>Grow your business in our online market. Shop for our latest projects and products created by students and help them with ideas and improvements.</p>
    </div>
    <div class="col-lg-2 text-center">
        <i class="fas fa-atom"></i>
        <br>
        <label>Incubation Hub</label>
        <br>
        <p>C&T Hub combines the Design Thinking Lab and Co-working Spaces, which focuses on collaboration with physical and virtual facilities giving them access to resources and links them with mentors, researchers and experts.</p>
    </div>
    <div class="col-lg-2 text-center">
        <i class="fas fa-chalkboard-teacher"></i>
        <br>
        <label>Thematic Training</label>
        <br>
        <p>Emerging technologies focusing on environment, energy, information and computing, ecommerce and creative sectors in line with the government's Industry 4.0 Roadmap and Development Plan. </p>
    </div>
    <div class="col-lg-2 text-center">
        <i class="fas fa-chart-line"></i>
        <br>
        <label>The Metamorph</label>
        <br>
        <p>A 3-stage incubation program aimed at developing technology-based entrepreneurial skills leading to startups.</p>
    </div>
</div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 m-2 m text-start">
            <h1 class=" mt-5 h-b">Featured Articles</h1>
            <p>This is what we are up to. Be updated on what's new on our projects, activities and achievements.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        @php $i = 0; @endphp
        @foreach ($articles as $a)
            @if($i==0)
            <div class="col-lg-4">
                <div class="card alert-card">
                    <div class="card-body">
                        <img src="/uploads/articles/{{ $a->image or 'placeholder.png' }}" class="img-fluid" style=" width: 100%;height: 500px; object-fit: cover;">
                        <small class="date-sm">{{ $a->created_at->format('F j, Y') }}</small>
                        <div class="w-100 text-start my-3">
                            <div style="height: 60px">
                                <h5 class="line-clamp">{{ mb_strimwidth($a->title, 0, 120, '...') }}</h5>
                            </div>
                            <p class="line-clamp mt-3">{!! strip_tags($a->description) !!}</p>
                            <a href="{{ route('article-view' , [$a->id]) }}">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="container-fluid m-0 p-0">
                    <div class="row mt-lg-0 mt-3">
            @php $i++; @endphp
            @else
                        <div class="col-6 col-lg-5 {{ $i>=3 ? 'mt-3': '' }}">
                            <div class="card alert-card">
                                <div class="card-body">
                                    <img src="/uploads/articles/{{ $a->image or 'placeholder.png' }}" class="img-fluid" style=" width: 100%;height: 150px; object-fit: cover;">
                                    <small class="date-sm">{{ $a->created_at->format('F j, Y') }}</small>
                                    <div class="w-100 text-start my-3">
                                        <div style="height: 30px">
                                            <small class="fw-bold line-clamp">{{ mb_strimwidth($a->title, 0, 60, '...') }}</small>
                                        </div>
                                        <small class="line-clamp mt-lg-3 mt-5">{!! strip_tags($a->description) !!}</small>
                                        <a href="{{ route('article-view' , [$a->id]) }}"><small>Read Details</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @php $i++; @endphp
            @endif
            @endforeach
                    </div>
                </div>
            </div>
  
    </div>
</div>

<div class="container-fluid mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 text-start">
            <h1 class=" mt-5 h-b">Featured Products</h1>
            <p>Ideas, Innovations, Inventions, Creations.... <br>
                Browse through and take interest in the fruits of our innovator's relentless efforts to compete in the modern world.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($products as $b)
            <div class="col-lg-3">
                <div class="card alert-card">
                    <a href="{{ route('article-view' , [$b->id]) }}" class="text-decoration-none"> <div class="card-body">
                        <img src="/uploads/articles/{{ $b->image or 'placeholder.png' }}" class="card-img">
                        <div class="w-100 text-center mt-3">
                            <div style="height: 60px">
                                <h5 class="line-clamp">{{ $b->title }}</h5>
                            </div>
                        </div>
                    </div>
                </div></a>
            </div>
        @endforeach
    </div>
</div>
<div class="container my-5 pt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 text-start">
            <h1 class=" mt-5 h-b">Featured Innovator</h1>
            <p>Meet and get to know one of the innovators that had contributed greatly to make NU WAVE a tsunami.</p>
        </div>
        <div class="col-lg-6">
            <div class="card alert-card">
                <div class="card-body">
                    @foreach ($innovator as $c)
                    <img src="/uploads/articles/{{ $c->image or 'placeholder.png' }}" class="img-fluid" style=" width: 100%;height: 500px; object-fit: cover;">
                    <div class="w-100 text-start my-3">
                        <div style="height: 60px">
                            <h3 class="fw-bold line-clamp">{{ $c->title }}</h3>
                        </div>
                        <p class="line-clamp">{!! strip_tags($c->description) !!}</p>
                        <a href="{{ route('article-view' , [$c->id]) }}">Read Details</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection