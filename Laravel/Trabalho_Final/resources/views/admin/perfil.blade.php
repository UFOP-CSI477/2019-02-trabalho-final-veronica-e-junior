@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Bem-vindo ao seu perfil</h3>
            <button type="submit"class="btn blue"> 
                 <a class="grey-text text-lighten-3" href="{{route('admin.cadastrar-animal')}}">Colocar Animal para Adoção</a>
            </button>
            <button type="submit"class="btn blue"> 
                 <a class="grey-text text-lighten-3" href="{{route('admin.meus-animais')}}">Seu Histórico</a>
            </button>
            <button type="submit"class="btn blue"> 
                 <a class="grey-text text-lighten-3" href="{{route('admin.meus-animais')}}">Seus Pedidos de Adoção</a>
            </button>
            <button type="submit"class="btn blue"> 
                 <a class="grey-text text-lighten-3" href="{{route('admin.meus-animais')}}">Suas Adoções</a>
            </button>
        </div>
        <br><br><br><br>
        <br><br><br><br><br>
    </div>

@endsection
