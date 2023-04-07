<section class="how_its_work py-5" style="background-color: #f5f5f5;">
    <div class="zt-container">
        <div class="main-block">
            <h2 class="main-block-title" style="color:#2586c8">ماذا قال عملاؤنا عنا</h2>
        </div>
        <div class="row">
            @foreach ($says as $say)
                <div class="col-md-4">
                    <div class="testimonials with-button">
                        <div class="testimonials-image">
                            <img src="{{ asset("images/say/".$say->image) }}" loading="lazy" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h4>{{ $say->client_name }}</h4>
                            <h5>{{ $say->jop }}</h5>
                            <p>{{ $say->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
