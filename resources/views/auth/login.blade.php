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
                        <form class="forms-sample cmxform">
                            <div class="form-group">
                                <label for="ruc">RUC</label>
                                <input type="text" class="form-control" id="defaultconfig" placeholder="ruc" maxlength="11">
                            </div>
                            <div class="form-group">
                                <label for="password">CONTRASEÑA</label>
                                <input type="password" class="form-control" id="password"
                                placeholder="&#183;&#183;&#183;&#183;&#183;&#183;&#183;&#183;">
                            </div>
                            <div class="mt-3">
                                {{--<button type="button" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                    Iniciar sesión
                                </button>--}}
                                <a href="{{ route('home') }}" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                    Iniciar sesión
                                </a>
                            </div>
                            <a href="#" class="d-block mt-3 text-muted">¿Olvisó su contraseña?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
