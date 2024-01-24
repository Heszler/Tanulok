<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tanuló adataia</h1>
    <ul>
        <li>Id:{{ $adatok->id }}</li>
        <li>OM azonosító:{{ $adatok->omaz }}</li>
        <li>Név:{{ $adatok->nev }}</li>
        <li>Lakhely:{{ $adatok->lakhely }}</li>
        <li>Szuletési idő:{{ $adatok->szulido }}</li>
    </ul>
</body>
</html>