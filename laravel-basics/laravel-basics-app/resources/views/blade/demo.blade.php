{{-- Blade basics demo page --}}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blade Demo</title>
  </head>
  <body>
    <h1>Hello, {{ $name }}.</h1>
    <p>The current UNIX timestamp is {{ time() }}.</p>
    <h2>Items</h2>
    <ul>
      @foreach ($items as $item)
        <li>{{ $item }}</li>
      @endforeach
    </ul>
  </body>
</html>
