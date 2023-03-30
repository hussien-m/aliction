<div class="row">
    @foreach ( $helpdesks as $key=>$how )
        <div class="col-md-4">
        <div class="steps-content horizontal-steps">
            <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-2 col-3"><img class="steps-content-img" src="{{ asset('images/helpdesk/'.$how->image) }}" loading="lazy" alt="how1"></div>
            <div class="col-lg-10 col-md-12 col-sm-10 col-9">
                <h3 class="steps-content-title">{{ $how->title }}</h3>
                <p class="steps-content-description">{{ $how->body }}</p><span class="steps-content-number">{{ $key+=1 }}</span>
            </div>
            </div>
        </div>
        </div>
    @endforeach
  </div>
