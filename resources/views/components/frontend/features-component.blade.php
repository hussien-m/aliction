<section class="section_search p5" style="background-color:#fff" id="features">
    <div class="zt-container main-container">
      <div class="features-section block">
        <div class="main-block">
          <h2 class="main-block-title text-center" style="color: #2586c8;"> {{ $title_section->feature_title }}</h2>
          <p class="main-block-paragraph">{{ $title_section->feature_title2 }}</p>
        </div>


        @foreach ( $features as $f )
        <div class="with-image pb-90">
            <div class="row">
              <div class="col-md-6 order-2 mt-md-0 mt-4"><img src="{{ asset('images/features/'.$f->image) }}" loading="lazy" width="100%" alt="chat"></div>
              <div class="col-md-6 align-self-center order-1 order-md-first">
                <div class="features pe-5">
                  <h4>{{ $f->title }}</h4>
                  <p>{{ $f->body }}</p><a href="#chat" class="btn btn-outline-primary my-2">المزيد عن  {{ $f->title }}</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
