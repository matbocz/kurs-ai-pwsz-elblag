@extends('student.layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Dodaj studenta</a></h2>
<br>
 
<form action="{{ route('students.store') }}" method="POST" name="add_student">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Imie</strong>
            <input type="text" name="Imie" class="form-control" placeholder="Wpisz imię">
            <span class="text-danger">{{ $errors->first('Imie') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Nazwisko</strong>
            <input type="text" name="Nazwisko" class="form-control" placeholder="Wpisz nazwisko">
            <span class="text-danger">{{ $errors->first('Nazwisko') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Adres</strong>
            <input type="text" name="adress_id" class="form-control" placeholder="Wpisz id adresu">
            <span class="text-danger">{{ $errors->first('adress_id') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Wyślij</button>
    </div>
</div>
 
</form>
@endsection