@extends('layouts.app')

@section('appTitle')
    Strona główna
@stop

@section('appContent')
    To jest strona główna.
@stop

@section('appMenu')
    <div class="row">
        <div class="col-sm">
            <a href="{{ url('/najlepsze') }}">Najlepsze książki</a><br>
            <a href="{{ url('/najgorsze') }}">Najgorsze książki</a><br>
            <a href="{{ url('/polecane') }}">Polecane książki</a><br>
            <a href="{{ url('/recenzje') }}">Recenzje książek</a><br>
            <a href="{{ url('/opinie') }}">Opinie o książkach</a><br><br>
        </div>

        <div class="col-sm">
            <a href="{{ url('/ksiazka1') }}">Opis Książki 1</a><br>
            <a href="{{ url('/ksiazka2') }}">Opis Książki 2</a><br>
            <a href="{{ url('/ksiazka3') }}">Opis Książki 3</a><br>
            <a href="{{ url('/ksiazka4') }}">Opis Książki 4</a><br>
            <a href="{{ url('/ksiazka5') }}">Opis Książki 5</a><br><br>
        </div>
    </div>

    <a href="{{ url('/autor') }}">O autorze</a>
    <a href="{{ url('/kontakt') }}">Kontakt</a>
@stop