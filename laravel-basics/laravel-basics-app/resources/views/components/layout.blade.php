{{-- Application layout component --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Blade Demo' }}</title>

    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1>Blade Demo</h1>
        <hr>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
