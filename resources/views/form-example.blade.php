<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mans profils</title>
    <link rel="stylesheet" href="{{ asset('style2.css') }}">
</head>
<body>
    <main>
        <h1>Labdien! 👋</h1>
        <p>Jūs ievadījāt: <strong>{{ $name }}</strong></p>
        <p>Jūsu atsaukme: <strong>{{ $feedback }}</strong></p>
    </main>
</body>
</html>
