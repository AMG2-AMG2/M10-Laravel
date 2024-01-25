
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij uw website</title>
</head>
<body>
    <div class="layout-container">
        <header>
            <div class="logo">
                <img src="{{ asset('resources/img/logo.jpg') }}" alt="Logo Project">
            </div>
            
            @include('includes.navigation')
        </header>

        <div class="content">
            @yield('content')
        </div>

        @include('includes.footer')
    </div>
</body>
</html>
