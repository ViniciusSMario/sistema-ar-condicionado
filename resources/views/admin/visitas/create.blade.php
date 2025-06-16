@extends('admin.layouts.app')

@section('title', 'Agendar Visita')

@section('content')
<h1>Agendar Visita</h1>
<form action="{{ route('visitas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="ordem_servico_id">Ordem de Serviço</label>
        <select name="ordem_servico_id" class="form-control" required>
            <option value="" disabled selected>Selecione uma ordem de serviço</option>
            @foreach ($ordensServico as $ordem)
            <option value="{{ $ordem->id }}">{{ $ordem->descricao }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="data_agendada">Data Agendada</label>
        <input type="date" name="data_agendada" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tecnico">Técnico</label>
        <input type="text" name="tecnico" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Agendar</button>
    <a href="{{ route('visitas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
