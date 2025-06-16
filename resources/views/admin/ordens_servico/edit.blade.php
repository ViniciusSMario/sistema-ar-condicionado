@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Editar Ordem de Serviço</h2>

    <form action="{{ route('ordens-servico.update', $ordemServico->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Define o método PUT para a atualização -->

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-select" required>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $ordemServico->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $ordemServico->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pendente" {{ $ordemServico->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="em_andamento" {{ $ordemServico->status == 'em_andamento' ? 'selected' : '' }}>Em Andamento</option>
                <option value="concluido" {{ $ordemServico->status == 'concluido' ? 'selected' : '' }}>Concluído</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
