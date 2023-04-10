<!-- Start  Head -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="{{ $option->meta_desc }}">
  <meta name="keywords" content="{{ $option->meta_tag }}">
  <meta name="author" content="{{ $option->site_name }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $option->site_name }}</title>
  <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/bootstrap/css/bootstrap-rtl.min.css') }}">
  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles-rtl.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/auth.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&amp;family=Noto+Kufi+Arabic&amp;family=Noto+Naskh+Arabic&amp;family=Noto+Sans+Arabic:wght@500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
         *{
         font-family: 'Noto Kufi Arabic', sans-serif;
         }
         p{
         font-family: 'Noto Naskh Arabic', serif;
         font-size: 18px;
         }
         footer ul li a{
         font-family: 'Noto Naskh Arabic', serif;
         font-size: 16px;
         }
         h3{
            color: #2586c8;
         }
  </style>
</head><!-- End Head -->
<!-- Section navbar -->
<body class="saphqa-header-visible saphqa">
    <section id="header_logo" class="">
        <div class="zt-container">
          <nav class="navbar navbar-expand-lg navbar-fixed-top">
            <a href="#" class="nav-link" style="font-size: 25px;" id="btn-bars">
            <span class="fa fa-bars"></span>
            </a> <a class="navbar-brand" href="{{ url('/') }}"><img class="logopic" src="{{ asset('images/settings/'.$option->logo) }}"   alt="logofull"></a>
            <div class="d-flex justify-content-between align-items-center w-100">
              <ul class="navbar-nav">


              </ul>

              <ul class="navbar-nav">
                <li class="dropdown nav-item dropdown-mega">
                  <a href="#features" class="dropdown-toggle nav-link" aria-expanded="true"><span class="fa fa-star"></span>
                  المميزات
                </a>
                </li>
                <li class="dropdown nav-item dropdown-mega">
                  <a href="#price" class="dropdown-toggle nav-link" aria-expanded="true"><span class="fa fa-usd"></span>
                  الأسعار</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </section><!-- End Section Header -->
  <!-- End Section navbar -->
  <!-- Start Section sidebar -->

  <x-frontend.aside-component/>



  <section class="section_search py-5" style="background-color:#fff">
    <div class="zt-container mb-5">

      <div class="block">
        <div class="main-block">
          <h2 class="main-block-title text-left mb-5" style="color:#2586c8">{{ $page->title }}</h2>

        </div>
        <p class="features-content-description">
            {!! $page->content !!}
        </p>

      </div>

    </div>
  </section>


  <footer>
    <div class="container main-container pt-5 pb-3">
        <div class="row">
            <div class="col-lg-8 col-md-6 text-start">
                <img class="footer-brand" src="{{ asset('images/settings/'.$option->footer_logo) }}" loading="lazy" alt="">
                <p class="footer-description">{{ $option->site_desc }}</p>
            </div>

            <x-frontend.page-component/>
        </div>
    </div>
    <div class="middle-footer">
        <div class="container main-container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyrights text-center">
                        © 2023 <a style="color:#2586c8" href="{{ url('/') }}" target="_blank">أليكشن</a>. جميع الحقوق محفوظة.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
  <!-- Scripts -->
  <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script> <!-- End Scripts -->

  <script>


         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();

                 document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                 });
             });
         });

  </script><!-- end Section Footer -->
</body>
</html>
