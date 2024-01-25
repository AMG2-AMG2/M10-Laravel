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
                <img src="/resources/img/" alt="Logo Project">
            </div>
            <nav>
                <ul>
                    <li><a href="#Ipad">Ipad</a></li>
                    <li><a href="#Telefoon">Telefoon</a></li>
                    <li><a href="#Laptop">Laptop</a></li>
                </ul>
            </nav>
        </header>

        @include('includes.navigation')

        <div class="container">
            @yield('content')
        </div>

        <footer>
            <p>&copy; <?php echo date("Y"); ?>Website gemaakt!</p>
        </footer>
    </div>
</body>

</html>