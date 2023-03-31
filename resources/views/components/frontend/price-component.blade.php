<section class="section_search" style="background-color:#f9f9f9" id="price">
    <div class="zt-container main-container">
      <div class="text-center">
        <h2 style="color: #2586c8;">{{ $title_section->price_title }}</h2>
        <p class="main-block-paragraph">{{ $title_section->price_title2 }}</p></p>
      </div>
      <div class="card-deck mb-3 text-center">
        @foreach ( $prices as $price )
        @php

            $fets = explode(',',$price->features);

        @endphp

            <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h5 class="my-0 font-weight-normal">{{ $price->name }}</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title pricing-card-titl mt-3">
                <b>{{ $price->price }}</b>
            </h4>
            <hr>
              <ul class="list-unstyled mt-3 mb-4">
                @for($i = 0; $i < count($fets); $i++)
                <li class="mx-5" style="text-align: justify"> <span class="fa fa-check"></span> {{  $fets[$i] }}</li>
                @endfor

              </ul><button type="button" class="btn btn-lg btn-block btn-outline-primary">سجل الان</button>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
