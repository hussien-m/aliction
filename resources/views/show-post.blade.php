@extends('blog')

@section('content')
<section class="body-content">
    <div class="container container800">

        <div class="row">
            <div class="col-md-12">
                <div class="home_article1">
                    <!--<div class="articleimg" style="background: url('') center / cover;"></div>-->
                    <div class="article_desc">
                        <div class="article_meta">
                            <a class="meta_tag" href="#cat">{{ $post->category->name }}</a>
                            <p class="article_date">
                                آخر تحديث {{ \Carbon\Carbon::parse($post->created_at)->locale('ar')->isoFormat('D MMMM Y') }} </p>

                        </div>
                        <div class="clearfix"></div>
                        <h1 class="article_title">{{ $post->title }}</h1>
                        <section class="post-content">{!! $post->body !!}</section>

                    </div>
                </div>
            </div>

        </div>
        <div class="related_section my-3">
            <h4 class="cat_title text-right mb-4">مقالات ذات صلة</h4>
            <div class="row">

                @foreach ( $postsCategory as  $post )
                @php
                    $words = htmlspecialchars_decode(strip_tags($post->body));
                    $text = $words;

                // إزالة الوسوم HTML من النص
                $text = strip_tags($text);

                // تحويل النص إلى مصفوفة من الكلمات
                $words = explode(" ", $text);

                // الحصول على الـ 30 كلمة الأولى
                $first_30_words = array_slice($words, 0, 15);

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
                                <a class="meta_tag" href="#cat">{{ $post->category->name }}
                                    </a>
                            </div>
                            <div class="clearfix"></div>
                            <a class="article_title mt-3 d-block"
                                href="{{ route('post.show',$post->slug) }}">{{ $post->category->name }}: {{ $post->title }}</a>
                                <p class="post_excerpt">{!! $shortened_text.'....' !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@stop
