<div class="login-form-card">
    <div class="login-heading">
        <h2>Selamat datang</h2>
        <p>Masuk ke akun kamu untuk melanjutkan.</p>
    </div>

    @if ($errors->any())
        <div class="error-box" role="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="identity">Email admin / NIM mahasiswa</label>
            <input
                type="text"
                id="identity"
                name="identity"
                value="{{ old('identity') }}"
                placeholder="Masukkan email atau NIM"
                autocomplete="username"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                autocomplete="current-password"
                required
            >
        </div>

        <label class="remember">
            <input type="checkbox" name="remember" value="1">
            Ingat saya
        </label>

        <button type="submit">Masuk</button>
    </form>
</div>
