@extends('admin.layouts.app')

@section('title', 'Editar Visita')

@section('content')
<h1>Editar Visita</h1>
<form action="{{ route('visitas.update', $visita) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="ordem_servico_id">Ordem de Serviço</label>
        <select name="ordem_servico_id" class="form-control" required>
            @foreach ($ordensServico as $ordem)
            <option value="{{ $ordem->id }}" {{ $ordem->id == $visita->ordem_servico_id ? 'selected' : '' }}>
                {{ $ordem->descricao }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="data_agendada">Data Agendada</label>
        <input type="date" name="data_agendada" class="form-control" value="{{ $visita->data_agendada }}" required>
    </div>
    <div class="form-group">
        <label for="tecnico">Técnico</label>
        <input type="text" name="tecnico" class="form-control" value="{{ $visita->tecnico }}" required>
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="{{ route('visitas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
