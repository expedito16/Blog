@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de email.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu email!') }}
                        </div>
                    @endif

                    {{ __('Antes de proseguir, entre no link de verificação enviado para o seu email') }}
                    {{ __('Se você não recebeu o email') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui, e outro será enviado') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
