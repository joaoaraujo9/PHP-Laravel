@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá  {{{ Auth::user()->name }}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Poste uma mensagem 
                                 
                    <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Mensagem') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>
                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Mensagem') }}
                                </button>

                                
                            </div>
                        </div>
                                        

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
