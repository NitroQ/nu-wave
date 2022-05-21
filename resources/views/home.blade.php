@extends('template.main')
@section('title', 'NU Wave - Home')

@section('css')
<style>
    #inner-car{
    height: 65vh; 
    object-fit:cover; 
}
.img-cover{
        object-fit: cover; 
        height:65vh;
        width: 100%;
    }
@media and (max-width: 540px){
    #inner-car{
        height: 300px; 
        object-fit: cover; 
    }

}
</style>
@endsection


@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" id="inner-car">
            <div class="carousel-item active">
                <img src="/images/carousel1.png" class="d-block img-cover" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/carousel2.png" class="d-block img-cover" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/carousel3.png" class="d-block img-cover" alt="...">
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
<div class="container-fluid p-lg-0 px-3">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center text-lg-start">
            <h1 class=" my-5 h-b">Welcome to NU Wave!</h1>
            <p>NU Wave is the pinnacle of innovation in National University where projects are being developed and improved to showcase the best of the best in NU. The Center for Innovation and Entrepreneurship is the vehicle of National University in the creation of a Leading Innovation Culture within the University. Ultimately, the Center will facilitate the innovation process of bringing the idea to market.
            </p>
        </div>
    </div>

    <div class="row row-icn-icn justify-content-center px-3 my-5">
        <div class="col-lg-2 text-center">
            <svg width="50" height="50" viewBox="0 0 256 256" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M92.3847 51.8729C65.4397 82.12 46.948 125.575 45.2309 129.67L15.3801 116.858C6.79469 113.16 4.68135 101.933 11.2855 95.3284L51.0426 55.5713C57.2505 49.3634 66.2322 46.5896 74.9497 48.3067L92.3847 51.8729ZM112.065 186.07C116.028 190.032 121.839 191.089 126.858 188.711C142.18 181.579 175.069 164.804 196.334 143.539C256.961 82.9125 257.489 33.5134 253.923 12.38C253.455 9.78411 252.205 7.39324 250.34 5.52813C248.475 3.66303 246.084 2.41289 243.488 1.94543C222.355 -1.62082 172.956 -1.09249 112.329 59.5338C91.0638 80.7992 74.4214 113.688 67.1568 129.01C64.7793 134.029 65.968 139.973 69.7984 143.803L112.065 186.07ZM204.127 163.615C173.88 190.56 130.425 209.052 126.33 210.769L139.142 240.62C142.841 249.205 154.068 251.319 160.672 244.715L200.429 204.958C206.637 198.75 209.411 189.768 207.693 181.05L204.127 163.615ZM89.0826 197.957C90.3634 204.354 90.045 210.968 88.1555 217.212C86.2661 223.457 82.8642 229.138 78.2518 233.752C68.0813 243.922 36.5134 251.451 16.0405 255.413C6.92677 257.13 -1.13031 249.073 0.58677 239.96C4.54927 219.487 11.9459 187.919 22.2484 177.748C26.8622 173.136 32.5433 169.734 38.7876 167.845C45.0319 165.955 51.6461 165.637 58.043 166.918C73.4968 169.823 86.1768 182.503 89.0826 197.957ZM142.708 86.875C142.708 72.3459 154.596 60.4584 169.125 60.4584C183.654 60.4584 195.542 72.3459 195.542 86.875C195.542 101.404 183.654 113.292 169.125 113.292C154.596 113.292 142.708 101.404 142.708 86.875Z" fill="black"/>
                </svg>                
            <br>
            <label>Incubation and Start-ups</label>
            <br>
            <p>An incubation program that focuses on the further development of entreprenuerial skills that will lead to a much greater successful start ups.</p>
        </div>
        <div class="col-lg-2 text-center">
            <svg width="55" height="55" viewBox="0 0 307 307" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M286.137 159.946L227.015 132.759V54.8617C226.988 53.2274 226.491 51.6354 225.584 50.2754C224.676 48.9154 223.396 47.8449 221.897 47.1913L157.912 17.7881C156.789 17.2689 155.567 17 154.329 17C153.092 17 151.869 17.2689 150.746 17.7881L86.7618 47.1913C85.281 47.8759 84.0277 48.9705 83.1507 50.3451C82.2737 51.7197 81.8097 53.3168 81.8137 54.9469V132.844L22.9481 159.946C21.4673 160.631 20.214 161.725 19.337 163.1C18.46 164.474 17.996 166.071 18 167.702V251.053C17.996 252.683 18.46 254.28 19.337 255.655C20.214 257.03 21.4673 258.124 22.9481 258.809L86.9325 288.212C88.0555 288.731 89.2781 289 90.5156 289C91.7531 289 92.9757 288.731 94.0987 288.212L154.5 260.428L214.901 288.212C216.024 288.731 217.247 289 218.484 289C219.722 289 220.944 288.731 222.067 288.212L286.052 258.809C287.533 258.124 288.786 257.03 289.663 255.655C290.54 254.28 291.004 252.683 291 251.053V167.702C291.011 166.081 290.56 164.49 289.699 163.116C288.838 161.743 287.602 160.643 286.137 159.946V159.946ZM218.57 187.559L174.975 167.702L218.57 147.673L262.164 167.702L218.57 187.559ZM210.038 132.673L155.097 158.241V92.7022C156.125 92.6568 157.137 92.4258 158.083 92.0204L209.953 68.2422V132.844L210.038 132.673ZM154.5 34.8334L198.095 54.8617L154.5 74.8899L110.991 54.8617L154.5 34.8334ZM90.5156 147.588L134.11 167.616L90.5156 187.559L46.9209 167.702L90.5156 147.588ZM145.969 245.513L90.5156 271.081V205.542C91.7062 205.471 92.8687 205.152 93.9281 204.605L145.798 180.741L145.969 245.513ZM273.937 245.513L218.825 271.081V205.542C219.899 205.427 220.942 205.109 221.897 204.605L273.767 180.741L273.937 245.513Z" fill="black"/>
                </svg>
                
            <br>
            <label>Training and Workshops</label>
            <br>
            <p>The C&T Hub will collaborate with the Design Thinking Lab which then will provide them Co-working spaces, giving them access to physical and virtual facilities, numerous
                resources and connections to professionals and experts. </p>
        </div>
        <div class="col-lg-2 text-center">
            <svg width="55" height="55" viewBox="0 0 291 291" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M178.5 75.7727C187.975 75.7727 197.063 79.5368 203.763 86.237C210.463 92.9372 214.227 102.025 214.227 111.5C214.227 124.719 207.022 136.271 196.364 142.464V153.182C196.364 154.761 195.736 156.276 194.62 157.392C193.503 158.509 191.988 159.136 190.409 159.136H166.591C165.012 159.136 163.497 158.509 162.38 157.392C161.264 156.276 160.636 154.761 160.636 153.182V142.464C149.978 136.271 142.773 124.719 142.773 111.5C142.773 102.025 146.537 92.9372 153.237 86.237C159.937 79.5368 169.025 75.7727 178.5 75.7727V75.7727ZM190.409 165.091V171.045C190.409 172.625 189.782 174.139 188.665 175.256C187.548 176.373 186.034 177 184.455 177H172.545C170.966 177 169.452 176.373 168.335 175.256C167.218 174.139 166.591 172.625 166.591 171.045V165.091H190.409ZM226.136 105.545H244V117.455H226.136V105.545ZM113 105.545H130.864V117.455H113V105.545ZM184.455 46V63.8636H172.545V46H184.455ZM136.342 60.8864L149.025 73.6291L140.57 82.025L127.886 69.4014L136.342 60.8864ZM207.975 73.5695L220.599 60.8864L229.114 69.4014L216.43 82.025L207.975 73.5695V73.5695Z" fill="black"/>
                <path d="M257.772 191.499C217.07 232.191 152.934 235.03 108.904 200.121L99.7304 209.285L107.35 216.899L45.1365 279.108C47.4518 282.77 48.4545 285.589 47.2968 286.737L43.8917 290.137C38.3553 295.683 -5.0496 252.264 0.486809 246.727L3.89198 243.332C5.03995 242.179 7.85416 243.172 11.5063 245.487L73.7292 183.279L81.3435 190.893L90.5128 181.724C55.6087 137.69 58.4423 73.5487 99.1298 32.8515C142.937 -10.9505 213.965 -10.9505 257.772 32.8515C301.584 76.6681 301.574 147.692 257.772 191.499V191.499ZM244.554 46.0798C208.051 9.57246 148.846 9.57246 112.353 46.0798C75.8459 82.5775 75.8459 141.783 112.353 178.28C148.856 214.792 208.042 214.783 244.554 178.28C281.047 141.773 281.056 82.5872 244.554 46.0798Z" fill="black"/>
                </svg>
            <br>
            <label>Innovation and Research</label>
            <br>
            <p>Environment and energy, information and computing, and the current trend of automation and data exchange is the center of attention of each of the leading-edge technologies.</p>
        </div>
        <div class="col-lg-2 text-center">
            <svg width="67" height="56" viewBox="0 0 355 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M111.222 154.529H178.222C182.317 154.529 185.667 157.865 185.667 161.941C185.667 166.018 182.317 169.353 178.222 169.353H103.778C99.6833 169.353 96.3333 166.018 96.3333 161.941V87.8235H81.4444C77.35 87.8235 74 84.4882 74 80.4118C74 76.3353 77.35 73 81.4444 73H103.778C107.872 73 111.222 76.3353 111.222 80.4118V95.2353H208L178.222 147.118H111.222V154.529ZM107.5 176.765C113.679 176.765 118.667 181.731 118.667 187.882C118.667 194.034 113.679 199 107.5 199C101.321 199 96.3333 194.034 96.3333 187.882C96.3333 181.731 101.321 176.765 107.5 176.765ZM174.5 176.765C180.679 176.765 185.667 181.731 185.667 187.882C185.667 194.034 180.679 199 174.5 199C168.321 199 163.333 194.034 163.333 187.882C163.333 181.731 168.321 176.765 174.5 176.765Z" fill="black"/>
                <path d="M318.75 0H35.4167C15.9375 0 0 15.9375 0 35.4167V230.208C0 249.688 15.9375 265.625 35.4167 265.625H88.5417L70.8333 283.333V318.75H283.333V283.333L265.625 265.625H318.75C338.229 265.625 354.167 249.688 354.167 230.208V35.4167C354.167 15.9375 338.229 0 318.75 0ZM318.75 230.208H35.4167V35.4167H318.75V230.208Z" fill="black"/>
                <rect x="257" y="64" width="44" height="44" rx="9" fill="black"/>
                <rect x="257" y="122" width="44" height="44" rx="9" fill="black"/>
                </svg>
            <br>
            <label>Exhibits and E-commerce</label>
            <br>
            <p>With the help of NU Wave, you get to expand the reach of your growing business. Also, you can shop for student-crafted items and crafts, and provide suggestion and feedbacks
                to help them with further developments. </p>
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
    <div class="row g-2 justify-content-center">
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
                    <div class="row g-2 mt-lg-0 mt-3">
            @php $i++; @endphp
            @else
                        <div class="col-6 {{ $i>=3 ? 'mt-3': '' }}">
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
<div class="container-fluid my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 text-start">
            <h1 class=" mt-5 h-b">Featured Innovator</h1>
            <p>Meet and get to know one of the innovators that had contributed greatly to make NU WAVE a tsunami.</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="card alert-card">
                <div class="card-body">
                    @foreach ($innovator as $c)
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/uploads/articles/{{ $c->image or 'placeholder.png' }}" class="img-fluid" style=" width: 100%;height: 500px; object-fit: cover;">
                        </div>
                        <div class="col-lg-6">
                            <div class="w-100 text-start my-3">
                                <div style="height: 60px">
                                    <h3 class="fw-bold line-clamp">{{ $c->title }}</h3>
                                </div>
                                <p class="">{!! strip_tags( mb_strimwidth($c->description, 0, 400, '...')) !!}</p>
                                <a href="{{ route('article-view' , [$c->id]) }}">Read Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection