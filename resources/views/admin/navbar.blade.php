<nav class="mmm">
    <div class="mmm-content">
        <ul class="mmm-list">
            <li>
                <a href="{{ route('Index') }}">Inicio</a>
            </li>

            <li>
                <a href="{{ route('AdminService') }}">Servicios</a>
            </li>

            <li>
                <a href="{{ route('AdminExperiences') }}">Expreiencias</a>
            </li>

            <li>
                <a href="{{ route('AdminContact') }}">Contactos</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav><!-- End mobile main menu -->
<header class="header header-minimal">
    <nav class="header-fixed">
        <div class="container">
            <div class="row flex-nowrap align-items-center justify-content-between">
                <div class="col-auto header-fixed-col logo-wrapper">
                    <a href="{{ route('Index') }}" class="logo" title="PathSoft">
                        <img src="{{ asset('img/logo_mocca.png') }}" width="115" height="36" alt="log_mocca">
                    </a>
                </div>
                <div class="col-auto col-xl col-static header-fixed-col d-none d-xl-block">
                    <div class="row flex-nowrap align-items-center justify-content-end">
                        <div class="col header-fixed-col d-none d-xl-block col-static">
                            <!-- Begin main menu -->
                            <nav class="main-mnu">
                                <ul class="main-mnu-list">
                                    <li>
                                        <a href="{{ route('Index') }}" data-title="Inicio">
                                            <span>Inicio</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AdminService') }}" data-title="Servicios">
                                            <span>Servicios</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AdminExperiences') }}" data-title="Expreiencias">
                                            <span>Expreiencias</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AdminContact') }}" data-title="Contactos">
                                            <span>Contactos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-title="Salir">
                                            <span>Salir</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-block d-xl-none header-fixed-col">
                    <div class="main-mnu-btn">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
