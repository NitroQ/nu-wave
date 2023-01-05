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

        <script src="https://cdn.tiny.cloud/1/vn4rdetp72raf9qtcb8oym9d587dpfmmcdi1wczd8g649kb6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      
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
 
              <small>Website Management</small>
                <li>
                  <a href="{{ route('admin.article.index') }}"><i class="fas fa-newspaper"></i> Articles</a>
                </li>
                <li>
                  <a href="{{ route('admin.product.index') }}"><i class="fas fa-luggage-cart"></i> Products</a>
                </li>
                <li>
                  <a href="{{ route('admin.exhibit.index') }}"><i class="fas fa-luggage-cart"></i> Exhibits</a>
                </li>


                <li>
                  <a href="{{ route('admin.innovator.index') }}"><i class="fas fa-users"></i> Innovators</a>
                </li>
                <li>
                  <a href="{{ route('admin.carousel.index') }}"><i class="fas fa-image"></i> Carousel</a>
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

          let paginator = $('nav > ul.pagination');
                  paginator.find('li').addClass('page-item');
                  paginator.find('li > *').addClass('page-link');
                  paginator.find('li:nth-child(1) > *').text('Previous');
                  paginator.find('li:nth-last-child(1) > *').text('Next');
                  
            $(document).ready(function(){
                $(".col-a").click(function(){
                    $('.collapse.show').collapse('hide');
                });
            });
        </script>
        <script>
           tinymce.init({
  selector: 'textarea',
  plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  link_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 520,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_mode: 'sliding',
  contextmenu: "link image imagetools table",
 });
          </script>
       
    </body>
</html>