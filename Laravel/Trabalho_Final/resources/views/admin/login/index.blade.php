@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Entrar</h2>
            <form action="{{route('admin.login')}}" method="POST">
                {{csrf_field()}}
                @include('admin.login._form')
                <button class="btn blue">Entrar</button>
            </form>
            <br><br>
            <a href="{{route('admin.cadastrar')}}">Cadastra-se</a>
        </div>
        
    </div>

@endsection