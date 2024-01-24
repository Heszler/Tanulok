<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adat szerkesztése</h1>
    <form action="{{ url('tanulok') }}" method="POST">
        {!! csrf_field() !!}
        
        <label for="omaz">OM azonosító:</label>
        <input type="number" id="omaz" name="omaz" value="{{ $adatok->omaz }}"><br>

        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev" value="{{ $adatok->nev }}"><br>

        <label for="lakhely">Lakhely:</label>
        <input type="text" id="lakhely" name="lakhely" value="{{ $adatok->lakhely }}"><br>
        
        <label for="szulido">Szuletési idő:</label>
        <input type="date" id="szulido" name="szulido" value="{{ $adatok->szulido }}"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>