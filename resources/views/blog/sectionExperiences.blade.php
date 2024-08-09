<div class="container">
    <div class="row items">
        <header class="col-12">
            <div class="section-heading heading-center">
                <div class="section-subheading"></div>
                <h2>Nuestras Experiencias</h2>
            </div>
        </header>
        @foreach ($experiences as $experience)
            <div class="col-lg-4 col-md-6 col-12 item">
                <article class="news-item item-style">
                    <div class="news-item-img el">
                        <img src="{{ asset('storage/' . $experience->image_path) }}" alt="">
                    </div>
                    <div class="news-item-info">
                        <div class="news-item-date">{{ $experience->experience_date }}</div>
                        <h3 class="news-item-heading item-heading">
                            {{ $experience->experience }}
                        </h3>
                        <div class="news-item-desc">
                            <p>{{ $experience->description }}</p>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>
