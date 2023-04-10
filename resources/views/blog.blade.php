<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <link rel="icon" href="">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v20.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>مدونة أليكشن - نصائح عملية لتقديم أفضل خدمة عملاء</title>
    <meta property="og:locale" content="ar_AR" />
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    <link rel='stylesheet' id='wp-block-library-rtl-css'
        href='{{ asset("blogs/css/style-rtl.min.css") }}' type='text/css'
        media='all' />


    <!-- Bootstrap core CSS -->
    <link
        href="{{ asset("blogs/css/bootstrap.min.css") }}"
        rel="stylesheet">

    <!-- Fontawsome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- fonts CSS -->
    <link href="https://static.hsoubcdn.com/assets/fonts/css/NotoArabic.css" rel="stylesheet">
    <link href="https://static.hsoubcdn.com/assets/fonts/css/OpenSans.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link
        href="{{ asset('blogs/css/style.css') }}"
        rel="stylesheet">
</head>

<body>


    <section class="top-header" id="myHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-0 mx-0">
                <a class="navbar-brand px-0 mx-0" href="{{ url('/blog') }}"><img class="img-fluid"
                        src="{{ asset('images/settings/'.$option->logo) }}"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MostaqlMenu"
                    aria-controls="MostaqlMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="start_btn d-lg-none"
                    href="{{ url('/') }}">ابدأ
                    الآن</a>
                <div class="collapse navbar-collapse" id="MostaqlMenu">
                    <div class="navbar-nav ml-auto">
                        <ul>
                            <li id="menu-item-2" class="menu-item-2"><a></a></li>
                        </ul>
                    </div>
                    <div class="header_social ">
                        <form class="social_h_icon search_frm" action="#">
                            <input name="s" class="search_input" placeholder="بحث..." type="text">
                            <div class="hideback1"></div>

                        </form>
                    </div>
                    <form class="row hideondesk" action="#">


                        <div class="col-md-10 pl-0 ml-0 col-9">
                            <input type="search" name="s" class="search_input1" placeholder="جملة البحث">
                        </div>
                        <div class="col-md-2 pr-0 mr-0 col-3">
                            <button type="submit" class="search_submit1" value="بحث"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <a class="start_btn d-none d-lg-block d-xl-block"
                        href="{{ url('/') }}">ابدأ
                        الآن</a>

                </div>

            </nav>
        </div>
    </section>


    @if(Request::is('blog'))
    <section class="body-content">
        <div class="container">
            <div class="row">

                <x-blog.header-blog-component/>


            </div>
            <p class="cat_title">أحدث المقالات</p>
            <x-blog.body-blog-component/>

            <!-- pagination -->

        </div>

    </section>
    @endif

    @yield('content')







    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 text-right">
                    <img class="img-fluid footer-brand"
                        src="{{ asset('images/settings/'.$option->logo) }}">
                    <p class="footer_description">{{ $option->site_desc }}</p>

                </div>


            </div>

        </div>
        <div class="middle_footer">
            <div class="container">
                <p class="copyrights">
                    © 2023 أليكشن،  جميع الحقوق محفوظة </p>
            </div>
        </div>
        <style>
            .sticky {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 9999;
                background: #fff;
            }

            .sticky+.body-content {
                padding-top: 102px;
            }
        </style>
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script
            src="https://blog.zaetoon.com/wp-content/themes/mostaqlvip-mostaql_blog_wordpress-aa22a295d1ce/js/bootstrap.min.js">
        </script>

</body>

</html>
