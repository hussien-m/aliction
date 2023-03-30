<ul class="d-flex justify-content-between align-items-center sm-hidden">
    @foreach($pages as $page)
    <li>
      <a href="{{ route('show.page',$page->id) }}">{{ $page->title }}</a>
    </li>
    @endforeach
  </ul>
