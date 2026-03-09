<form action="/users/1" method="POST">
    @csrf
    @method('PUT') {{-- Spoof the HTTP method as PUT --}}

    <label>
        Name:
        <input type="text" name="name">
    </label>
    <button type="submit">Update User</button>
</form>
