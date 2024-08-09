<div class="container">
    <div class="row">
        <header class="col-12">
            <div class="section-heading heading-center">
                <h2>Nuestros Servicios</h2>
            </div>
        </header>
        @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 col-12 item">
                <a href="{{ route('getLongDescription', ['idService' => $service->id]) }}" class="iitem item-style iitem-hover">
                    <div class="iitem-icon">
                        <i class="material-icons material-icons-outlined md-48">{{ $service->icon }}</i>
                    </div>
                    <div class="iitem-icon-bg">
                        <i class="material-icons material-icons-outlined">{{ $service->icon }}</i>
                    </div>
                    <h3 class="iitem-heading item-heading-large">{{ $service->service }}</h3>
                    <div class="iitem-desc">{{ $service->short_description }}</div>
                </a>
            </div>
        @endforeach
    </div>
</div>
