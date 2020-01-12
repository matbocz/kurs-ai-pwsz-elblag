@extends('adress.layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Dodaj adres</a></h2>
<br>
 
<form action="{{ route('adresses.store') }}" method="POST" name="add_adress">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Miasto</strong>
            <input type="text" name="Miasto" class="form-control" placeholder="Wpisz miasto">
            <span class="text-danger">{{ $errors->first('Miasto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Ulica</strong>
            <input type="text" name="Ulica" class="form-control" placeholder="Wpisz ulicę">
            <span class="text-danger">{{ $errors->first('Ulica') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Wyślij</button>
    </div>
</div>
 
</form>
@endsection