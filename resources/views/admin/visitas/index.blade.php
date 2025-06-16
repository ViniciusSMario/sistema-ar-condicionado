@extends('admin.layouts.app')

@section('title', 'Visitas')

@section('content')
<h1>Lista de Visitas</h1>
<a href="{{ route('visitas.create') }}" class="btn btn-primary mb-3">Agendar Visita</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Ordem de Serviço</th>
            <th>Data Agendada</th>
            <th>Técnico</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($visitas as $visita)
        <tr>
            <td>{{ $visita->ordemServico->descricao }}</td>
            <td>{{ $visita->data_agendada }}</td>
            <td>{{ $visita->tecnico }}</td>
            <td>
                <a href="{{ route('visitas.edit', $visita) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('visitas.destroy', $visita) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
