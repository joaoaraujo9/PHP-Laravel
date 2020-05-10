@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="col-md-12" action=" {{ url ('/home/store') }}" method="POST">
            {{ csrf_field()}}
            <div class="card">
                <div class="card-header">Olá  {{{ Auth::user()->name }}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                                 
                    <div class="form-group row">
                            <label for="message" class="col-md-3 col-form-label d-flex justify-content-end">{{ __('Mensagem') }}</label>
                    
                                <textarea name="messages" rows="3" class="col-md-6 d-flex justify-content-start" id="message"> </textarea>

                    </div>
                        

                        
                <div class="row d-flex justify-content-center">
                    <div class="form-group">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Mensagem') }}
                            </button>

                                
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                              
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($messages as $message)
                    <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->messages }}</td>
                    <td>
                    <a href="{{ action('HomeController@delete', ['id' => $message->id]) }}" class="btn btn-danger btn-sm">X</a>
                    </td>
                    <td></td>
                    <td></td>
                 
                    </tr>
                
                @endforeach 
                    
                </tbody>
                
                </table>
                </div> 
                                 

                </div>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection
