@extends('template.main')
@section('title', 'NU Wave | Exhibits')
@section('css')
    <style>
        .exhibit-banner {
            height: 40vh;
            background-image: linear-gradient(0deg, #2634B2, transparent), url("/images/nu-manila.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .exhibit-img {
            max-height:200px;
        }
    </style>
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center exhibit-banner">
            <div class="col-lg-6 text-left">
                <h1 class=" mt-5 h-b text-white">All exhibits</h1>
            </div>
        </div>
    </div>

    <!-- images in the exhibits are temporary -->
    <section class="pt-5 px-5">
        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <img src="/images/nu-manila.jpg" alt="" class="img-fluid exhibit-img">
                    <div class="card-body">
                       Exhibit 2022
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="https://sway.office.com/DZ96lKDqnJulnCUu?ref=Link" target="_blank" style="text-decoration: none; color: black">
                    <div class="card text-center">
                        <!-- this image is the original image of sway exhibit -->
                        <img src="/images/sway.png" alt="" class="img-fluid exhibit-img">
                        <div class="card-body text-truncate">
                            1st NU - Philippines Virtual Exhibit
                            of Entrepreneurial Mind and
                            Technopreneurship
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <img src="/images/nu-manila.jpg" alt="" class="img-fluid exhibit-img">
                    <div class="card-body">
                        Exhibit Archived
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection