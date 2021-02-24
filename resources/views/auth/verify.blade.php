@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar endereço de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de confirmação foi enviado para o seu email') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique seu email para o link de confirmação.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui caso não tenha recebido o link.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
