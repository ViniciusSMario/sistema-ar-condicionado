@extends('admin.layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<h1>Editar Cliente</h1>
<form action="{{ route('clientes.update', $cliente) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" class="form-control" value="{{ $cliente->endereco }}" required>
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
