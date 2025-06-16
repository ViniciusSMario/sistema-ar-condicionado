@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">Clientes</div>
                    <div class="card-body text-center">
                        <h2>{{ \App\Models\Cliente::count() }}</h2>
                        <p>Total de Clientes</p>
                        <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary btn-sm">Ver Clientes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-white text-center">Ordens de Serviço</div>
                    <div class="card-body text-center">
                        <h2>{{ \App\Models\OrdemServico::count() }}</h2>
                        <p>Total de Ordens de Serviço</p>
                        <a href="{{ route('ordens-servico.index') }}" class="btn btn-outline-success btn-sm">Ver Ordens</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-white text-center">Visitas</div>
                    <div class="card-body text-center">
                        <h2>{{ \App\Models\Visita::count() }}</h2>
                        <p>Total de Visitas Agendadas</p>
                        <a href="{{ route('visitas.index') }}" class="btn btn-outline-warning btn-sm">Ver Visitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
