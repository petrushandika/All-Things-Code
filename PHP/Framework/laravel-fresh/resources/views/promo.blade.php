<!DOCTYPE html>
<html>
<head>
    <title>Daftar Promo</title>
</head>
<body>
    <h1>Daftar Promo Menarik</h1>
    <ul>
        @for ($i = 0; $i < count($promos); $i++)
            <li>{{ $promos[$i] }}</li>
        @endfor
    </ul>
</body>
</html>
