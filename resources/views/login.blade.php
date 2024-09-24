<div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1>LOGIN PAGE</h1>
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
        <button type="submit">login</button>
    </form>
    <a href="/register">register</a>
</div>
