@extends('admin.layouts.app')

@section('title', 'Ordens de Serviço')

@section('content')
<h1>Lista de Ordens de Serviço</h1>
<a href="{{ route('ordens-servico.create') }}" class="btn btn-primary mb-3">Adicionar Ordem de Serviço</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ordensServico as $ordemServico)
        <tr>
            <td>{{ $ordemServico->cliente->nome }}</td>
            <td>{{ $ordemServico->descricao }}</td>
            <td>{{ ucfirst($ordemServico->status) }}</td>
            <td>
                <a href="{{ route('ordens-servico.edit', $ordemServico) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('ordens-servico.destroy', $ordemServico) }}" method="POST" style="display:inline;">
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
