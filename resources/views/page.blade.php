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
  </style>
</head><!-- End Head -->
<!-- Section navbar -->
<body class="saphqa-header-visible saphqa">
  <section id="header_logo" class="">
    <div class="zt-container">
      <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <a href="#" class="nav-link" style="font-size: 25px;" id="btn-bars">
        <span class="fa fa-bars"></span>
        </a> <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/settings/'.$option->logo) }}" width="120" alt="logofull"></a>
        <div class="d-flex justify-content-between align-items-center w-100">
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
          <ul class="navbar-nav">
            <li class="nav-item btn-nav sm-hidden">
              <a href="#" class="nav-link">دخول</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section><!-- End Section Header -->
  <!-- End Section navbar -->
  <!-- Start Section sidebar -->
  <aside class="saphqa-sidebar">
    <div class="saphqa-sidebar-wrapper">
      <ul class="saphqa-sidebar-menu">
        <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
          <a class="saphqa-sidebar-menu-item-link" href="#helpdesks">لوحة التحكم</a>
        </li>
        <li class="saphqa-sidebar-menu-item">
          <a class="saphqa-sidebar-menu-item-link">المميزات</a>
          <ul class="saphqa-sidebar-menu">
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#chat">الدردشة المباشرة</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#conversations">إدارة المحادثات</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#knowledgebase">قاعدة المعرفة</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#shared-inbox">صناديق البريد</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#permissions">الصلاحيات</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#brand">تخصيص النطاق والهوية</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#statistics">الإحصائيات والتقارير</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#webhooks">الخطافات</a>
            </li>
          </ul>
        </li>
        <li class="saphqa-sidebar-menu-item">
          <a class="saphqa-sidebar-menu-item-link" href="https://zaetoon.com#price">الأسعار</a>
        </li>
        <li class="saphqa-sidebar-menu-item">
          <a class="saphqa-sidebar-menu-item-link">أليكشن</a>
          <ul class="saphqa-sidebar-menu">
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#about">عن أليكشن</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#terms">شروط الاستخدام</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#privacy">بيان الخصوصية</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="#redirect/helpdesk" target="_blank">مركز المساعدة</a>
            </li>
          </ul>
        </li>
        <li class="saphqa-sidebar-menu-item">
          <a class="saphqa-sidebar-menu-item-link">تابعنا</a>
          <ul class="saphqa-sidebar-menu">
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="https://blog.zaetoon.com" target="_blank">مدونة أليكشن</a>
            </li>
            <li class="saphqa-sidebar-menu-item hsoub--visible-v hsoub-desktop hsoub-tablet hsoub-mobile">
              <a class="saphqa-sidebar-menu-item-link" href="https://twitter.com/zaetooncom" target="_blank">تويتر</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside><!-- End Section sidebar -->



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
                <div class="footer-social">

                    <a href="{{ $option->twitter }}" target="_blank">
                        <div class="footer-social-icon">
                            <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path></svg>
                        </div>
                    </a>
                </div>
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
