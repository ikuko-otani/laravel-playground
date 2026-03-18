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
  <h2>Condition examples</h2>

  @if (count($items) === 1)
  <p>I have one item.</p>
  @elseif (count($items) > 1)
  <p>I have multiple item.</p>
  @else
  <p>I do not have any items.</p>
  @endif

  @unless ($isAdmin)
  <p>You are not an admin user.</p>
  @endunless

  @isset($records)
  <p>$records is defined.</p>
  @endisset

  @empty($records)
  <p>$records is empty.</p>
  @endempty

  <h2>Users with loop metadata</h2>
  <ul>
    @foreach ($users as $user)
    <li>
      #{{ $loop->iteration}} {{ $user['name'] }}
      @if ($loop->first)
      (first)
      @endif
      @if ($loop->last)
      (last)
      @endif
    </li>
    @endforeach
  </ul>
</body>

</html>
