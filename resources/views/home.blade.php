@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row align-items-center justify-content-between">
                    <p class="font-weight-bold col-md-3 mt-3">{{ __('Dashboard') }}</p>
                    <a class="btn btn-primary col-md-3 mr-3" href="/cadastrarVenda">Nova Venda</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bem-vindo!') }}

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="/listaClientes" class="btn btn-primary">Clientes</a>
                            <a href="/listaProdutos" class="btn btn-primary">Produtos</a>
                            <a href="/listaVendas" class="btn btn-primary">Vendas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
