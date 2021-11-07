@extends('layouts.app')

@section('title', 'Edição')

@section('content')
<!-- Tudo aqui dentro será renderizado dentro do body do outro template. -->
<div class="container mt-5">
    <h1>Editar um jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">    
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma categoria...">
            </div>
            <br>
            <div class="form-group">   
                <label for="ano_criacao">Ano:</label>
                <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite um ano de criação...">
            </div>
            <br>
            <div class="form-group">    
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite um valor...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
            </div>
        </div>
    </form>
</div>

@endsection