<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="">
    <meta name="dinges" content="inhoud">
    <title>@yield('page_title') | Project PROG</title>
    <link href="/resources/css/app.css" rel="stylesheet">
</head>

<body>
    <header>
        @include('layouts.partials.header')
    </header>

    <content>
        @yield('content')
    </content>

    <footer>
        @include('layouts.partials.footer')
    </footer>

    <scripts>
        @include('layouts.partials.scripts')
    </scripts>
</body>
</html>