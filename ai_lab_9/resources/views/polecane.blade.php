@extends('layouts.app')

@section('appTitle')
    Polecane książki
@stop

@section('appContent')
    To jest strona o polecanych książkach.
@stop

@section('appMenu')
    <a href="{{ url('/') }}">Wróć na stronę główną</a>
@stop