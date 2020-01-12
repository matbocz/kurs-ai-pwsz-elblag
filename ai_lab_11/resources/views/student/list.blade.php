@extends('student.layout')

@section('content')
<h2 class="text-center">Tabela studentów</h2>
<a href="{{ route('students.create') }}" class="btn btn-success mb-2">Dodaj studenta</a>
<a href="{{ url('/adresses') }}" class="btn btn-info mb-2">Przejdź do tabeli adresów</a>
<br>
<div class="row">
    <div class="col-12">

        <table class="table table-bordered" id="laravel_crud">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Adres</th>
                    <th>Utworzono</th>
                    <td colspan="2">Akcja</td>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->Imie }}</td>
                    <td>{{ $student->Nazwisko }}</td>
                    <td>{{ $student->adress_id }}</td>
                    <td>{{ date('Y-m-d', strtotime($student->created_at)) }}</td>
                    <td><a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edytuj</a></td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $students->links() !!}
    </div>
</div>
@endsection