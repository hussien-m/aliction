@foreach ( $posts as $post )
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
<div class="col-lg-6">

    <div class="home_article home_article2">
        <a href="{{ route('post.show',$post->slug) }}">
            <div class="articleimg"
                style="background: url('{{ asset('images/post/'.$post->image) }}') center / cover;">
            </div>

        </a>
        <div class="article_desc">
            <div class="article_meta">
                <a class="meta_tag" href="{{route('category-blog.show',$post->category->slug) }}">{{ $post->category->name }}
                    </a>
            </div>
            <div class="clearfix"></div>
            <a class="article_title mt-3 d-block"
                href="{{ route('post.show',$post->slug) }}">{{ $post->category->name }}: {{ $post->title }}</a>
            <p class="post_excerpt">{!! $shortened_text.'....'  !!}</p>
        </div>
    </div>
</div>
@endforeach

