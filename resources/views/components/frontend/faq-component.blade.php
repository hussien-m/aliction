<section class="how_its_work py-5" style="background-color: #fff;">
    <h2 class="title text-center sec_title" style="color: #2586c8;">{{ $title_section->faq_title }}</h2>
    <div class="zt-container mt-4">
      <div id="accordion">

        @foreach ( $faqs as $count=>$faq )
        <div class="card">
            <div class="card-header" id="headingOne{{ $faq->id }}">
              <h5 class="mb-0">
                <button class="btn btn-link @if($count ==0) collapsed @endif" data-toggle="collapse" data-target="#collapseOne{{ $faq->id }}" aria-expanded="false" aria-controls="collapseOne">{{ $faq->title }}</button>
            </h5>
            </div>
            <div id="collapseOne{{ $faq->id }}" class="collapse" aria-labelledby="headingOne{{ $faq->id }}" data-parent="#accordion">
              <div class="card-body">
                {{ $faq->body }}
            </div>
            </div>
          </div>
        @endforeach


      </div>
    </div>
  </section>
