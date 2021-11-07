@extends('layouts.app')

@section('title', 'Criação')

@section('content')
<!-- Tudo aqui dentro será renderizado dentro do body do outro template. -->
<div class="container mt-5">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{ route('jogos-update') }}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">    
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria...">
            </div>
            <br>
            <div class="form-group">   
                <label for="ano_criacao">Ano:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite um ano de criação...">
            </div>
            <br>
            <div class="form-group">    
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite um valor...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
            </div>
        </div>
    </form>
</div>

@endsection