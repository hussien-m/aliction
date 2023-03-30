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
        </a> <a class="navbar-brand" href="http://new.deal/ar/home"><img src="{{ asset('images/settings/'.$option->logo) }}" width="120" alt="logofull"></a>
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



<!-- End Section FAQ-->
  <!-- Section Footer -->
  <footer id="footer" style="background-color: #f9f9f9;">
    <div class="zt-container">
      <div class="row">
        <div class="home-info col-md-3 mb-3">
          <h2>موقع أليكشن</h2>
          <ul class="footer-menu">
            <li class="mr-4">
              <a href="#">حول الموقع</a>
            </li>
            <li class="mr-4">
              <a href="#">كيف يعمل الموقع</a>
            </li>
            <li class="mr-4">
              <a href="#">الأسئلة الشائعة</a>
            </li>
            <li class="mr-4">
              <a href="#">اعرف كيف نضمن حقوقك</a>
            </li>
          </ul>
        </div>
        <div class="home-info col-md-6 mb-3">
          <h2>مدونة أليكشن</h2>
          <ul class="footer-menu">
            <li class="mr-4">
              <a href="#">5 طرق لتسويق مشروعك باستخدام التعليق الصوتي</a>
            </li>
            <li class="mr-4">
              <a href="#">10 مهارات ضرورية لإدارة حسابات شبكات التواصل الاجتماعي</a>
            </li>
            <li class="mr-4">
              <a href="#">كيف تُحسِّن محتوى قناة اليوتيوب لمحركات البحث؟</a>
            </li>
            <li class="mr-4">
              <a href="#">كيف تنشئ بودكاست ناجح يسوّق لمشروعك بفعالية؟</a>
            </li>
          </ul>
        </div>
        <div class="home-info col-md-3 mb-3">
          <h2>مجتمع أليكشن</h2>
          <ul class="footer-menu">
            <li class="mr-4">
              <a href="#">نماذج أعمال قمت بتنفيذها</a>
            </li>
            <li class="mr-4">
              <a href="#">طلبات الخدمات غير الموجودة</a>
            </li>
            <li class="mr-4">
              <a href="#">تجارب وقصص المستخدمين</a>
            </li>
            <li class="mr-4">
              <a href="#">أمور عامة حول أليكشن</a>
            </li>
          </ul>
        </div>
        <div class="home-info col-md-3 mb-3">
          <h2>احصل على المساعدة</h2>
          <ul class="footer-menu">
            <li class="mr-4" style="list-style: none">
              <a href="#">قاعدة المعرفة</a>
            </li>
            <li class="mr-4" style="list-style: none">
              <a href="#">مركز المساعدة</a>
            </li>
          </ul>
        </div>
        <div class="home-info col-md-6 mb-3">
          <h2>وسائل الدفع</h2>
          <ul class="footer-menu">
            <li class="mr-4" style="list-style: none"><img src="http://new.deal/frontend/assets/images/payments.png" width="270" alt="payments"></li>
          </ul>
        </div>
        <div class="home-info col-md-3 mb-3">
          <h2>تابع أليكشن</h2>
          <ul class="footer-menu d-flex">
            <li class="mr-2" style="list-style: none">
              <a class="linkSocial facebook" href="http://www.facebook.com/" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            </li>
            <li style="list-style: none">
              <a href="http://www.twitter.com/" class="linkSocial twitter" target="_blank">
                <span class="fa fa-facebook"></span>
            </a>
            </li>
            <li class="mr-4" style="list-style: none">
              <a href="http://www.instagram.com/" class="linkSocial twitter" target="_blank">
                <span class="fas fa-google"></span>
            </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="subfooter">
      <div class="zt-container">
        <div class="d-flex justify-content-between align-items-center">
            <x-frontend.page-component/>
            <span>جميع الحقوق محفوظة {{ $option->site_name }} {{ date("Y") }} &copy;</span>
        </div>
      </div>
    </div>
    <div class=""></div>
  </footer><!-- End Section Footer -->
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
