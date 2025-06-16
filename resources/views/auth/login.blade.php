@extends('layouts.app')

@section('title', 'Entrar')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" id="password" name="password" class="form-control" required>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Lembrar-me</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Entrar</button>

    <div class="text-muted mt-3">
        <a href="{{ route('password.request') }}">Esqueceu sua senha?</a> |
        <a href="{{ route('register') }}">Criar uma conta</a>
    </div>
</form>
@endsection
