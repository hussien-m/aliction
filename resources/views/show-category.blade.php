@extends('blog')

@section('content')


    <section class="body-content">
        <div class="container">
            <h1 class="text-right mb-4 font-size-18">{{ $category->name }}</h1>
            <div class="row" style="padding-bottom: 30px">

                @foreach ( $category->posts as $post )
                @php
                $words = htmlspecialchars_decode(strip_tags($post->body));
                $text = $words;

            // إزالة الوسوم HTML من النص
            $text = strip_tags($text);

            // تحويل النص إلى مصفوفة من الكلمات
            $words = explode(" ", $text);

            // الحصول على الـ 30 كلمة الأولى
            $first_30_words = array_slice($words, 0, 30);

            // دمج الكلمات في نص واحد
            $shortened_text = implode(" ", $first_30_words);
            @endphp
                <div class="col-lg-4">
                    <div class="home_article">
                        <a href="{{ route('post.show',$post->slug) }}">
                            <div class="articleimg"
                                style="background: url('{{ asset('images/post/'.$post->image) }}') center / cover;">
                            </div>

                        </a>
                        <div class="article_desc">
                            <div class="article_meta">
                                <a class="meta_tag"
                                    href="{{ route('category-blog.show',$category->slug) }}">
                                    {{ $category->name }}</a>
                            </div>
                            <div class="clearfix"></div>
                            <a class="article_title mt-3 d-block"
                                href="{{ route('post.show',$post->slug) }}">{{ $post->title }}</a>
                            <p class="post_excerpt">{!! $shortened_text !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="clearfix"></div>
            <!-- pagination -->


        </div>

    </section>


@stop
