<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('web.component.layout.header.links')
    <!-- Link CSS/JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            display: none; /* Awalnya disembunyikan */
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block; /* Menampilkan submenu saat hover */
        }
    </style>
</head>

<body>
    <!-- include navbar -->
    @include('web.component.layout.navbar.topsection')
    @include('web.component.layout.navbar.navbar') 

    <!-- Include banner berdasarkan kondisi -->
    @if (isset($useLargeHeader) && $useLargeHeader)
        @include('web.component.banner.container')
    @else
        @include('web.component.banner.littlecontainer')
    @endif 

    <main>
        @yield('content')
    
        {{-- @if (!View::hasSection('content'))
            @abort('404') <!-- Menyertakan tampilan 404 jika tidak ada konten -->
        @else
            <!-- Konten lain jika ada -->
        @endif --}}
    </main>
    

    <!-- Include footer berdasarkan kondisi -->
    @include('web.component.layout.footer.footer')

    <!-- Link JavaScript tambahan -->
    @include('web.component.layout.header.js')
</body>

</html>
