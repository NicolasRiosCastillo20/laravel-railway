@extends('layout.layoutBlog')

@section('title', 'Página Principal del Blog')

@section('content')
    <article class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <h1>{{ $service->service }}</h1>
                    </div>
                    <div class="content">
                        <div class="item-border-radius" style="display: flex; justify-content: center">
                            <img src="{{ asset('storage/' . $service->image_path) }}" alt="">
                        </div>
                        <div>
                            {!! $service->long_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
