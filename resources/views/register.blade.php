<div>
    <h1>Register page</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">name</label>
        <br>
        <input type="text" name="name">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <label for="password">password</label>
        <br>
        <input type="password" name="password">
        @error('password')
        {{ $message }}
         @enderror
        <br>
        <label for="password">confirm password</label>
        <br>
        <input type="password" name="password_confirmation">
        <br>
        <button type="submit">register</button>
    </form>
</div>
