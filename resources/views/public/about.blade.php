@extends('template.main')
@section('title', 'NU Wave | About us')
@section('css')
    <style>
        .about-banner {
            height: 40vh;
            background-image: linear-gradient(0deg, #2634B2, transparent), url("/images/nu-dasma.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection

@section('main-content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center about-banner">
            <div class="col-lg-6 text-left">
                <h1 class=" mt-5 h-b text-white">About us</h1>
            </div>
        </div>
    </div>

    <div class="container p-5">
        
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-primary">Our reason</h5>
                <p class="ps-md-5" style="text-indent: 30px; text-align: justify;">
                    In line with the Philippine government’s aim at uplifting the Philippine standing in terms of Innovation, 
                    National University, as an academic institution must contribute to the creation of new ideas that result in 
                    the development of new or improved products, processes, business models, or services which are then spread, 
                    transferred,or commercialized, which creates social, economic, or environmental impact.
                </p>        
            </div>
            <div class="col-md-6">
                <h5 class="text-warning">Our mission</h5>
                <p class="ps-md-5" style="text-indent: 30px; text-align: justify;">
                    The Center for Innovation and Entrepreneurship promotes innovation and entrepreneurship across the NU community by 
                    uplifting the strength in multidisciplinary field. 
                </p>
            </div>
        </div>
        
    </div>

    <div class="container pt-5">
        <h5 class="text-primary">Our vision</h5>
        <p class="ps-md-5  lh-lg" style="text-align: justify;">
            The Center  for  Entrepreneurship  envisioned  to  be  an  inclusive, realistic, and  collaborative community. 
            <br><br>
            The  Center  of  Entrepreneurship  is  the  vehicle  of  National  University  in  the  creation  of  a Leading   
            Innovation   Culture   within   the   University,   wherein   creative   individuals   in   an organization are 
            motivated not only to achieve their fullest potential as individuals, but to do so  in  a  way  that  creates  
            wealth  and  value  for  all  stakeholders  Ultimately,  the  Center  will facilitate the innovation process of 
            bringingthe idea to market.
            <br><br>
            The intention of the center is aligned with NU strategic intent which includes competency 
            to succeed as an entrepreneur through continuous strengthening of the research capability of all stakeholders.
            The resources  such  as  time  and money  spent for research  and  development arealready an equity for a potential
            commercially availableproducts, services,and business models. It is envisioned to have a pool of inventors-turned-entrepreneurs 
            emerging from the grassroots,  rich  collection  of  Intellectual  Property  Assets  and  Start-ups.    
            Mind-setting  and paradigm shifting is necessary to transform ideas into economically benefitting ventures. 
            <br><br>
            The Center will address various local and global challenges and thusshall play a vital role in aligning  its  
            programs  to  the  Philippine  Development  Plan,  Executive  Order  No.5  Ambisyon Natin  2040,  
            Philippine  Industry  Roadmap,  United  Nations’Sustainable  Development  Goals (SGD),and Industry 4.0.   
            NU must be competitive andat par with the innovation initiatives of other  Higher  Education  Institutions. 
            The  Center  will  employ  and  adhere  to  existing  laws toeffectively manage resources, human capital,and 
            knowledge generation and transfer.
        </p>
    </div>

@endsection

