@extends('layouts.app')

@section('title', 'Redefinir Senha')

@section('content')
<div class="auth-card">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <!-- Token obrigatório -->
        @csrf

        <!-- E-mail -->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $email ?? old('email') }}" required autofocus>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Nova Senha -->
        <div class="mb-3">
            <label for="password" class="form-label">Nova Senha</label>
            <input type="password" id="password" name="password" class="form-control" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Confirmar Nova Senha -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Nova Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>

        <!-- Botão de Redefinir -->
        <button type="submit" class="btn btn-primary w-100">Redefinir Senha</button>
    </form>
</div>
@endsection
