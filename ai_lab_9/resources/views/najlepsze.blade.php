@extends('layouts.app')

@section('appTitle')
    Najlepsze książki
@stop

@section('appContent')
    To jest strona o najlepszych książkach.
@stop

@section('appMenu')
    <a href="{{ url('/') }}">Wróć na stronę główną</a>
@stop