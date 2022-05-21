<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>NU Wave | Admin</title>

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <!--Icon-->
        <script src="https://kit.fontawesome.com/f67ab1f0a2.js" crossorigin="anonymous"></script>
        <link rel='icon' type='image/png' href='/images/favicon.ico'>

        <!--Summernote-->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js" defer></script>
      
        <!--CSS/Stylesheets-->
        <link rel="stylesheet" href="/css/admin.css">
        @yield('css')
            
    </head>
    <body>

        {{-- Navigation --}}
        <nav class="navbar shadow navbar-expand-lg">

            <a href="/" class="navbar-brand w-50 mr-auto"><img src="/images/logo.png" height="30px"></a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Signout</a>
                </li>
            </ul>

        </nav>

        <div class="d-flex" id="wrapper">

        {{-- Side Navigation --}}
        <div class="sidebar-light border-right" id="sidebar-wrapper">
            <ul class="nav navbar-nav side-nav mt-3">
              <li>
                <a href=""><i class="fas fa-map"></i> Dashboard</a>
              </li>
 
              <small>EMERGENCY</small>
                <li>
                  <a href="{{ route('admin.article.index') }}"><i class="fas fa-exclamation-triangle"></i> Alerts</a>
                </li>

            </ul>
        </div>
        
        {{-- Page Content --}}
        <div id="page-content-wrapper">
            <div class="container-fluid" style="  padding-top: 20px; padding-bottom:20px">
              @yield('admin-content')      
            </div>      
        </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <script>
            $(document).ready(function(){
                $(".col-a").click(function(){
                    $('.collapse.show').collapse('hide');
                });
            });
        </script>
        <script>
          $(document).ready(function() {
      
      
          $('#description').summernote({
                  placeholder: 'Write your post content here.',
                  tabsize: 2,
                  height: 300,
                  spellCheck: true,
                  toolbar: [
                      ['style', ['style']],
                      ['font', ['bold', 'italic', 'underline', 'superscript', 'subscript' ,'clear']],
                      ['fontsize', ['fontsize']],
                      ['fontname', ['fontname']],
                      ['color', ['color']],
                      ['para', ['ul', 'ol', 'paragraph' ,'height']],
                      ['insert', ['link', 'picture', 'hr' , 'table']],
                      ['misc'  , ['undo' , 'redo' , 'fullscreen']]
                  ],
                  styleTags: [
                      { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                      'p',
                      'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
                  ],
                  popover: {
                      image: [
                          ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                          ['float', ['floatLeft', 'floatRight', 'floatNone']],
                          ['remove', ['removeMedia']]
                      ]
                  }
            });
      
        });
      </script>
    </body>
</html>