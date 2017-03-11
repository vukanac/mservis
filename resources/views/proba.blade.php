@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">



@if (count($vehicles) > 0)
	<div class="panel panel-default">
        <div class="panel-heading">
            Lista vozila
        </div>

        <div class="panel-body">
            <table class="table table-striped novoVozilo-table">

                <!-- Table Headings -->
                <thead>
                    <th>Tablice</th>
                    <th>Marka</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($vehicles as $novoVozilo)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $novoVozilo->tablice }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $vehicles->markaVozila }}</div>
                                </td>       
                                <td>
                                    <form action="/novo-vozilo/{{ $novoVozilo->tablice }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">
                                        <span class="fa fa-trash"></span>
                                        Izbriši
                                        </button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif




        </div>
    </div>
</div>

@endsection
