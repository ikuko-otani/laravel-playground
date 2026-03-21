{{-- Shared error messages panel --}}

@if (!empty($errors) && count($errors) > 0)
    <div class="mb-4 rounded border border-red-300 bg-red-100 p-3 text-red-800">
        <ul class="list-disc pl-5">
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
