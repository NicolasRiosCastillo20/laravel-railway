<!DOCTYPE html><html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mocca Aventura Y Cafe</title>
        <meta name="description" content="Description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <link rel="icon" href="{{ asset('img/granos-de-cafe.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preload" href="{{ asset('fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/material-icons/material-icons.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/material-icons/material-icons-outlined.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/tingle.css') }}">
    </head>

    <body>
        <header>
            @if($isAdminPanel)
                @include('admin.navbar')
            @else
                @include('blog.navbar')
            @endif

        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer footer-minimal">
            @include('blog.footer')
        </footer>

        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/lozad/lozad.min.js') }}"></script>
        <script src="{{ asset('libs/device/device.js') }}"></script>
        <script src="{{ asset('libs/spincrement/jquery.spincrement.min.js') }}"></script>
        <script src="{{ asset('libs/pristine/pristine.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <script src="{{ asset('js/tingle.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/forms.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/service.js') }}"></script>
        <script src="{{ asset('js/experiences.js') }}"></script>
        <script>
            function initializeQuill() {
                const quill = new Quill('#editor', {
                    theme: 'snow'
                });
            }
        </script>

    </body>
</html>
