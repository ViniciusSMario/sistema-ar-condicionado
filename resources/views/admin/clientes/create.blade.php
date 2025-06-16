@extends('admin.layouts.app')

@section('title', 'Adicionar Cliente')

@section('content')
<h1>Adicionar Cliente</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
