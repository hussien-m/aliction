@foreach ( $posts as $post )
<div class="col-lg-6">

    <div class="home_article home_article2">
        <a href="#cate">
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
                href="#cat">{{ $post->category->name }}: {{ $post->title }}</a>
            <p class="post_excerpt">{!! htmlspecialchars_decode(strip_tags(sub_str($post->body,-15))) !!}</p>
        </div>
    </div>
</div>
@endforeach

