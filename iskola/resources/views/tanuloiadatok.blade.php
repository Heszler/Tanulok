<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iskolai téma</h1>
    <h2> <a href={{ url('/tanulok/create') }}>Új tanuló felvitele </a> </h2>
    <ul>
    @foreach($adatok as $egyadat)
    <li>
    {{ $egyadat->omaz}}
    {{ $egyadat->nev}}
    <a href={{ url('/tanulok/'.$egyadat->id) }}> Részletek </a>
    <a href={{ url('/tanulok/'.$egyadat->id.'/edit') }}> Szerkesztés </a>
    <form method="POST" action="{{ url('tanulok/'.$egyadat->id) }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit"> Törlés </button>
    </form>
    </li>

    @endforeach
    </ul>
</body>
</html>