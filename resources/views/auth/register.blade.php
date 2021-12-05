@extends('layouts.guest')

@section('content')
    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-4 pr-md-0">
                        <div class="auth-left-wrapper"></div>
                    </div>
                    <div class="col-md-8 pl-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="/" class="noble-ui-logo d-block mb-2">Plani<span>Soft</span></a>
                            <h5 class="text-muted font-weight-normal mb-4">¡Bienvenido de nuevo! cree su cuenta.</h5>
                            <form class="forms-sample cmxform" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="ruc">RUC</label>
                                    <input type="text" class="form-control @error('ruc') is-invalid @enderror"
                                        id="defaultconfig" maxlength="11" name="ruc" value="{{ old('ruc') }}">
                                    @error('ruc')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password"
                                        placeholder="&#183;&#183;&#183;&#183;&#183;&#183;&#183;&#183;">
                                    @error('password')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirmar contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation"
                                        placeholder="&#183;&#183;&#183;&#183;&#183;&#183;&#183;&#183;">
                                </div>
                                <div class="py-2">
                                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Registrarse</button>
                                </div>
                                <span class="mt-3">¿Tiene una cuenta? <a href="/login"
                                        class="text-primary">Inicie sesión</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection