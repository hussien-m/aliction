<div class="col-lg-2 col-md-3 col-6">
    <h5 class="footer-menu-title">الصفحات</h5>
    <ul class="footer-menu">
        @foreach($pages as $page)
        @php
            $slug = str_replace(' ','-',$page->title)
        @endphp
        <li><a href="{{ route('show.page',$slug) }}" class="footer-menu-link">{{ $page->title }}</a></li>
        @endforeach
    </ul>
</div>
