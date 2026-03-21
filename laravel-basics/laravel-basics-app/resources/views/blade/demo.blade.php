{{-- Blade basics demo page --}}
<x-layout>
    <x-slot:title>
        Blade Demo Page
    </x-slot>

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
        <p>I have multiple items.</p>
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
        @foreach ($users as $loopUser)
            <li>
                #{{ $loop->iteration }} {{ $loopUser['name'] }}
                @if ($loop->first)
                    (first)
                @endif
                @if ($loop->last)
                    (last)
                @endif
            </li>
        @endforeach
    </ul>

    <h2>Conditional class and attributes</h2>

    <p @class([
        'p-2',
        'text-green-600' => $isActive,
        'text-red-600' => $hasError,
    ])>
        This text changes color based on state.
    </p>

    <label>
        <input type="checkbox" name="active" value="1" @checked($user->active)>
        Active User
    </label>

    <select name="version">
        @foreach ($versions as $version)
            <option value="{{ $version }}" @selected($selectedVersion === $version)>
                {{ $version }}
            </option>
        @endforeach
    </select>

    <h2>Include shared partial</h2>

    @php
        $errors = ['Name field is required.', 'Email must be valid'];
    @endphp

    @include('shared.errors')
</x-layout>
