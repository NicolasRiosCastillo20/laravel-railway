@extends('layout.layoutBlog')

@section('title', 'Página Principal del Blog')

@section('content')

    @include('blog.introBlog')

    <section class="section">
        @include('blog.sectionServices')
        <footer class="section-footer col-12 item section-footer-animate">
            <div class="btn-group align-items-center justify-content-center">
                <a href="{{ route('services') }}" class="btn btn-with-icon btn-w240 ripple">
                    <span>Más Servicios</span>
                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                </a>
            </div>
        </footer>
    </section>

    @include('blog.porqueElegirnos')

    <section class="section">
        <div class="container">
            <div class="row items spincrement-container">

                <div class="col-xl-4 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">history</i>
                            </div>
                            <div class="counter-min-numb spincrement" data-from="0" data-to="4">0</div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Años De Experiencia</h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">directions_car</i>
                            </div>
                            <div class="counter-min-numb spincrement" data-from="0" data-to="7">0</div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Vehiculos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">assignment_ind</i>
                            </div>
                            <div class="counter-min-numb spincrement" data-from="0" data-to="7">0</div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Conductores</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-bgc" style="margin-top: 1rem">
        @include('blog.sectionExperiences')
        <footer class="section-footer col-12 item section-footer-animate" style="margin-top: 2rem">
            <div class="btn-group align-items-center justify-content-center">
                <a href="{{ route('experiences') }}" class="btn btn-with-icon btn-w240 ripple">
                    <span>Más Experiencias</span>
                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                </a>
            </div>
        </footer>
    </section>

@endsection
