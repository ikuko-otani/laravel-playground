<form action="/users" method="POST">
    @csrf
    <label>
        Name:
        <input type="text" name="name">
    </label>
    <button type="submit">Create User</button>
</form>
