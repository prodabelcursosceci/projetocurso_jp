@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Cidades</div>
@if(count($errors)) 
    <div class="alert alert-danger" role="alert">
        @json($errors)
    </div>
@endif    
                <div class="card-body">
                    <form class="form-group" action="{{route('cidades.store')}}" method="POST" enctype="multipart/form-data" id="cidade_form" name="cidade_form">
                        @csrf
                        <p><label for="nome_cidade">Nome:</label><br>
                        <input class="form-control"type="text" name="nome_cidade" id="nome_cidade" placeholder="Digite o nome da cidade" required autocomplete="name" autofocus>                        </p>
                        {{--<p><label for="uf_cidade">UF:</label><br>
                        <input class="form-control"type="text" style="text-transform: uppercase;" maxlength="2" name="uf_cidade" id="uf_cidade" placeholder="Digite a sigla da UF" required autocomplete="uf_cidade" >
                        </p>--}}
                        <input type="submit" value="Salvar" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
