<section class="section_search p5" style="background-color:#f9f9f9" id="price">
    <div class="zt-container main-container mb-5 mt-5">
      <div class="text-center">
        <h1 style="color: #2586c8;">الأسعار</h1>
        <p class="main-block-paragraph">وفر قيمة شهرين عند الاشتراك بشكل سنوي</p>
      </div>
      <div class="card-deck mb-3 text-center">
        @foreach ( $prices as $price )
        @php

            $fets = explode(',',$price->features);

        @endphp

            <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">{{ $price->name }}</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title"><b>{{ $price->price }}</b></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                @for($i = 0; $i < count($fets); $i++)
                <li> {{  $fets[$i] }}</li>
                @endfor

              </ul><button type="button" class="btn btn-lg btn-block btn-outline-primary">سجل الان</button>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
