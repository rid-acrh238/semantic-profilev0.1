<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Semantic Student Profile</title>
</head>
<body>
    <h1>Semantic Student Profile</h1>
    <h2>Login</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <div>
            <label for="identity">Email admin / NIM mahasiswa</label>
            <input
                type="text"
                id="identity"
                name="identity"
                value="{{ old('identity') }}"
                autocomplete="username"
                required
            >
        </div>

        <div>
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                autocomplete="current-password"
                required
            >
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember" value="1">
                Ingat saya
            </label>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
