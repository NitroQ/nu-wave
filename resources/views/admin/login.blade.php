@extends('template.main')

@section('title', 'Login')

@section('css')
<style>

</style>
@endsection
@section('main-content')

<div class="row justify-content-center align-items-center">
    {{-- PAGE IMAGE --}}
   {{-- FORM --}}
   <div class="col-lg-6 col-12 py-5" id="form-user">
       <div class="container">
           {{-- LOGO --}}
           <div class="row d-flex justify-content-center mb-5 mb-lg-0">
               <div class="col-lg-5 col-3">
                   <img src="/images/logo.png" class="img-fluid" id="form-logo">
               </div>
           </div>
               {{-- LOGIN FORM --}}
           <div class="row  m-xxl-5 m-md-3 p-xxl-5 p-md-3 bg-light rounded shadow justify-content-center align-items-center">
               <h2 class="text-center fw-bold mt-4"><b class="text-blue"> LOGIN TO YOUR ACCOUNT</b></h2>
                <div class="col-9 py-5">
                    @if(Session::has('flash_error'))
                    <div class="alert alert-danger">{{Session::get('flash_error')}}</div>
                    @endif
    
                    <div class="container justify-content-center align-items-center px-2">
                        <form action="{{ route('login')}}" method="POST" >
                            {{ csrf_field() }}        
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary border rounded form-control">Login</button>
                        </form>
                    </div>
                   </div>
          
              
           </div>
       </div>
   </div>
</div>

@endsection