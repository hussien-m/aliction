<section class="section_search py-5" style="background-color:#fff">
    <div class="zt-container mb-5">
      <div class="block">
        <div class="main-block">
          <h1 class="main-block-title text-center mb-5" style="color:#2586c8">{{ $title_section->client_title }}</h1>
        </div>
        <div class="row">
          @foreach ( $clients as $client )
          <div class="col-md-4">
            <div class="features">
              <div class="features-content without-icons">
                <h4 class="features-content-title">{{ $client->title }}</h4>
                <p class="features-content-description">{{ $client->body }}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
