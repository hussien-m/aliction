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
        </a> <a class="navbar-brand" href="http://new.deal/ar/home"><img src="frontend/assets/images/logofull.png" width="120" alt="logofull"></a>
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
  <!-- Section Our Services  -->
  <!-- Section Our Services  -->
 <x-frontend.header-component/>
 <x-frontend.client-component/>


  <div class="grid steps">
    <div class="zt-container main-container">
      <div class="block">
        <div class="main-block mb-5 mt-5">
          <h1 class="main-block-title text-center" style="color:#2586c8">احصل على مركز مساعدة في دقائق</h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="steps-content horizontal-steps">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-2 col-3"><img class="steps-content-img" src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/steps/khamsat/how1.svg?id=157c2c6997e3e52c3a54" loading="lazy" alt="how1"></div>
                <div class="col-lg-10 col-md-12 col-sm-10 col-9">
                  <h3 class="steps-content-title">أنشئ مركز المساعدة</h3>
                  <p class="steps-content-description">أضف بيانات مركز المساعدة الأساسية وحدد الخطة المناسبة.</p><span class="steps-content-number">1</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="steps-content horizontal-steps">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-2 col-3"><img class="steps-content-img" src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/steps/khamsat/how2.svg?id=5b8dde2794df15f92160" loading="lazy" alt="how2"></div>
                <div class="col-lg-10 col-md-12 col-sm-10 col-9">
                  <h3 class="steps-content-title">خصص الإعدادات</h3>
                  <p class="steps-content-description">أضف الدردشة المباشرة إلى موقعك، وخصص الهوية البصرية وأضف موظفي الدعم لمركز المساعدة.</p><span class="steps-content-number">2</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="steps-content horizontal-steps">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-2 col-3"><img class="steps-content-img" src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/steps/khamsat/how3.svg?id=ae071881b338a4063957" loading="lazy" alt="how3"></div>
                <div class="col-lg-10 col-md-12 col-sm-10 col-9">
                  <h3 class="steps-content-title">تواصل مع العملاء</h3>
                  <p class="steps-content-description">ابدأ في الرد على استفسارات وأسئلة عملائك من مركز المساعدة.</p><span class="steps-content-number">3</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="section_search p5" style="background-color:#fff" id="features">
    <div class="zt-container main-container">
      <div class="features-section block">
        <div class="main-block">
          <h2 class="main-block-title text-center" style="color: #2586c8;">كل ما يحتاجه عملائك وفريقك في مكان واحد</h2>
          <p class="main-block-paragraph">برنامج واحد يجمع كل الميزات والأدوات لتقديم تجربة تواصل مميزة لعملائك</p>
        </div>
        <div class="with-image pb-90 mr-2">
          <div class="row">
            <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/chat.png?id=ff055e43289e047d2f67" loading="lazy" width="100%" alt="chat"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features pe-5">
                <h4>دردشة مباشرة</h4>
                <p>أضف الدردشة المباشرة إلى موقعك الإلكتروني أو تطبيق الجوال ليتمكن عملائك من التواصل معك مباشرة.</p><a href="#chat" class="btn btn-outline-primary my-2">المزيد عن الدردشة المباشرة</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 order-md-first mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/conversation.png?id=562e05e64c69f1de2c97" loading="lazy" width="100%" alt="conversation"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features ps-5">
                <h4>إدارة المحادثات</h4>
                <p>احصل على جميع الأدوات التي تحتاجها لإدارة المحادثات وتنظيم الردود على العملاء في مركز المساعدة.</p><a href="#conversations" class="btn btn-outline-primary my-2">المزيد عن إدارة المحادثات</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/knowledgebase.jpg?id=d08f05687971be96c0bc" loading="lazy" width="100%" alt="knowledgebase"></div>
            <div class="col-md-6 align-self-center order-1">
              <div class="features pe-5">
                <h4>قاعدة معرفة</h4>
                <p>وفر خدمة دعم ذاتية متكاملة لعملائك تحتوي شروحات ومعلومات عن منتجك تمكن العميل من الوصول للحلول المناسبة دون الحاجة للتواصل معك.</p><a href="#knowledgebase" class="btn btn-outline-primary my-2">المزيد عن قاعدة المعرفة</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 order-md-first mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/shared-mailboxes.jpg?id=1a50cdf503cb72d9e133" loading="lazy" width="100%" alt="shared-mailboxes"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features ps-5">
                <h4>صناديق بريد مشتركة</h4>
                <p>نظم رسائل العملاء بربط أكثر من بريد إلكتروني بمركز المساعدة وتحديد بريد واحد أو أكثر لكل صندوق مع تخصيصها بما يناسب عملك.</p><a href="#shared-inbox" class="btn btn-outline-primary my-2">المزيد عن صناديق البريد</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/permissions.jpg?id=47a98617fac20b23829c" loading="lazy" width="100%" alt="permissions"></div>
            <div class="col-md-6 align-self-center order-1">
              <div class="features pe-5">
                <h4>نظام صلاحيات متطور</h4>
                <p>تحكم بسير العمل بضبط صلاحيات الوصول المناسبة لفرق العمل سواء لصناديق البريد أو معلومات العملاء وقاعدة المعرفة وإعدادات المركز.</p><a href="#permissions" class="btn btn-outline-primary my-2">المزيد عن الصلاحيات</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 order-md-first mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/brand.jpg?id=52aa0d505cf0842167d8" loading="lazy" width="100%" alt="brand"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features ps-5">
                <h4>تخصيص النطاق والهوية البصرية</h4>
                <p>أضف مركز المساعدة لنطاق فرعي باسم موقعك وخصص هوية المركز البصرية بما يتناسب مع علامتك التجارية بإضافة الشعار والأيقونة والألوان.</p><a href="#brand" class="btn btn-outline-primary my-2">المزيد عن التخصيص</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/statistics.jpg?id=dd2c12ba009f02481528" loading="lazy" width="100%" alt="statistics"></div>
            <div class="col-md-6 align-self-center order-1">
              <div class="features pe-5">
                <h4>إحصائيات وتقارير شاملة</h4>
                <p>يوفر زيتون بيانات مفصلة عن حالة صناديق البريد والمحادثات وأداء الفرق والأفراد، بالإضافة إلى تقرير بالكلمات الأكثر بحثاً من عملائك بقاعدة المعرفة.</p><a href="#statistics" class="btn btn-outline-primary my-2">المزيد عن الإحصائيات</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 order-md-first mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/webhooks.jpg?id=ee08f12ea11b8eedc349" loading="lazy" width="100%" alt="webhooks"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features ps-5">
                <h4>واجهة برمجية API ونظام خطافات Webhooks</h4>
                <p>بسهولة يمكنك إضافة خصائص أو تطويرات إضافية اختيارية مثل ربط زيتون بإشعارات موقعك الداخلية عن طريق نظام Webhooks متقدم.</p><a href="#webhooks" class="btn btn-outline-primary my-2">المزيد عن الواجهات البرمجية</a>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image pb-90">
          <div class="row">
            <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/chat.jpg?id=be13c2cdc5a11d627c44" loading="lazy" width="100%" alt="chat"></div>
            <div class="col-md-6 align-self-center order-1 order-md-first">
              <div class="features pe-5">
                <h4>قنوات تواصل متعددة</h4>
                <p>امنح عميلك الخيار ليتواصل من المكان الذي يفضله سواء من الدردشة المباشرة أو المحادثات أو البريد الإلكتروني، يتم دمج رسائله تلقائياً لتظهر في محادثة واحدة بمركز المساعدة.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="with-image">
          <div class="row">
            <div class="col-md-6 order-2 order-md-first mt-md-0 mt-4"><img src="https://zaetoon.hsoubcdn.com/assets/zaetoon/images/main-page/responsive.png?id=70dccae1286ce0b7e2ed" loading="lazy" width="100%" alt="responsive" class="shadow-none"></div>
            <div class="col-md-6 align-self-center order-1">
              <div class="features ps-5">
                <h4>التجاوب على جميع الشاشات</h4>
                <p>قدم لعملائك وفريقك تجربة استخدام واحدة بواجهات متناسقة لمركز المساعدة وقاعدة المعرفة ولوحة التحكم على جميع أحجام الشاشات والمتصفحات.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section_search p5" style="background-color:#f9f9f9" id="price">
    <div class="zt-container main-container mb-5 mt-5">
      <div class="text-center">
        <h1 style="color: #2586c8;">الأسعار</h1>
        <p class="main-block-paragraph">وفر قيمة شهرين عند الاشتراك بشكل سنوي</p>
      </div>
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">المجانية</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul><button type="button" class="btn btn-lg btn-block btn-outline-primary">سجل الان</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">الاحترافية</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul><button type="button" class="btn btn-lg btn-block btn-outline-primary">احصل عليها الان</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">الاعمال</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul><button type="button" class="btn btn-lg btn-block btn-outline-primary">تواصل معنا</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-frontend.faq-component/>
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
          <ul class="d-flex justify-content-between align-items-center sm-hidden">
            <li>
              <a href="#">اتفاقية الاستخدام</a>
            </li>
            <li>
              <a href="#">شروط الخصوصية</a>
            </li>
          </ul><span>جميع الحقوق محفوظة {{ $option->site_name }} {{ date("Y") }} &copy;</span>
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
