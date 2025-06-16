@extends('admin.layouts.app')

@section('title', 'Adicionar Ordem de Serviço')

@section('content')
<h1>Adicionar Ordem de Serviço</h1>
<form action="{{ route('ordens-servico.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="cliente_id">Cliente</label>
        <select name="cliente_id" class="form-control" required>
            <option value="" disabled selected>Selecione um cliente</option>
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" class="form-control" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="pendente">Pendente</option>
            <option value="em andamento">Em Andamento</option>
            <option value="concluída">Concluída</option>
            <option value="cancelada">Cancelada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('ordens-servico.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
