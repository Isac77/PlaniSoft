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
                            <h5 class="text-muted font-weight-normal mb-4">¡Bienvenido de nuevo! Ingrese a su cuenta.</h5>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form class="forms-sample cmxform" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="ruc">RUC</label>
                                    <input type="text" class="form-control @error('ruc') is-invalid @enderror"
                                        id="defaultconfig" maxlength="11" name="ruc" value="20539814886">
                                    @error('ruc')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" value="12345678"
                                        placeholder="&#183;&#183;&#183;&#183;&#183;&#183;&#183;&#183;">
                                    @error('password')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-right">
                                    <a href="#" style="color: #000">¿Olvisó su contraseña?</a>
                                </div>
                                <div class="py-2">
                                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                        Iniciar sesión
                                    </button>
                                </div>
                                <div class="mt-1">
                                    ¿No tiene una cuenta? <a href="/register" class="text-primary">Regístrate</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection