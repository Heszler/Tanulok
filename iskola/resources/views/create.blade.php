<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Új adat felvitele</h1>
    <form action="{{ url('tanulok') }}" method="POST">
        {!! csrf_field() !!}
        
        <label for="omaz">OM azonosító:</label>
        <input type="number" id="omaz" name="omaz" value=""><br>

        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev" value=""><br>

        <label for="lakhely">Lakhely:</label>
        <input type="text" id="lakhely" name="lakhely" value=""><br>
        
        <label for="szulido">Szuletési idő:</label>
        <input type="date" id="szulido" name="szulido" value=""><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>