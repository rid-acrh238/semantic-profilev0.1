<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
</head>
<body>
    <h1>Dashboard Mahasiswa</h1>

    <p>Selamat datang, {{ auth()->user()->name }}.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
