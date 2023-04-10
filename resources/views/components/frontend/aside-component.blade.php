<aside class="saphqa-sidebar">
    <div class="saphqa-sidebar-wrapper">
        <ul class="list-unstyled components p-3 mt-3">
            <li>
                <a target="_blank" href="{{ url('/blog') }}">
                  <i class="fa fa-blog"></i> المدونة
                </a>
              </li>
            <li class="mt-2 mb-3">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="toggle-submenu">
                <i class="fa fa-home"></i>
                 المقالات
                <i class="fas fa-angle-left"></i>
              </a>
              <ul class="collapse list-unstyled mr-3" id="homeSubmenu">
                @foreach ( App\Models\Category::select(['slug','name'])->get() as $cat  )
                    <li class="mt-2"><a target="_blank" href="{{ route('category-blog.show',$cat->slug) }}">{{ $cat->name }}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="mb-3">
              <a  href="#features">
                <i class="fa fa-briefcase"></i> المميزات
              </a>
            </li>
          </ul>
    </div>
  </aside>
