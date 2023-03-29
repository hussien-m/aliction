<section class="how_its_work py-5" style="background-color: #fff;">
    <h2 class="title text-center sec_title" style="color: #2586c8;">الأسئلة الشائعة</h2>
    <div class="zt-container mt-4">
      <div id="accordion">

        @foreach ( $faqs as $faq )
        <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">{{ $faq->title }}</button></h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                {{ $faq->body }}
            </div>
            </div>
          </div>
        @endforeach


      </div>
    </div>
  </section>
