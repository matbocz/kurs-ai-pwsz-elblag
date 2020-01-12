@extends('adress.layout')

@section('content')
<h2 class="text-center">Tabela adresów</h2>
<a href="{{ route('adresses.create') }}" class="btn btn-success mb-2">Dodaj adres</a>
<a href="{{ url('/students') }}" class="btn btn-info mb-2">Przejdź do tabeli studentów</a>
<br>
<div class="row">
    <div class="col-12">

        <table class="table table-bordered" id="laravel_crud">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Utworzono</th>
                    <td colspan="2">Akcja</td>
                </tr>
            </thead>
            <tbody>
                @foreach($adresses as $adress)
                <tr>
                    <td>{{ $adress->id }}</td>
                    <td>{{ $adress->Miasto }}</td>
                    <td>{{ $adress->Ulica }}</td>
                    <td>{{ date('Y-m-d', strtotime($adress->created_at)) }}</td>
                    <td><a href="{{ route('adresses.edit',$adress->id)}}" class="btn btn-primary">Edytuj</a></td>
                    <td>
                        <form action="{{ route('adresses.destroy', $adress->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $adresses->links() !!}
    </div>
</div>
@endsection