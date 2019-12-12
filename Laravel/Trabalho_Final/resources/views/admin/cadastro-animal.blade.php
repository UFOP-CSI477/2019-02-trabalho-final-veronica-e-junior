@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" method="POST" class = "form-field">
        {{csrf_field()}}
        <div class="input-field">
            <input type="text" name="dono" class="validate" >
            <label>Dono:<label> 
        </div>
        <div class="input-field">
            <input type="text" name="nome" class="validate" >
            <label>Nome:<label> 
        </div>
        <div class="input-field">
            <input type="text" name="descricao" class="validate" >
            <label>Descrição:<label> 
        </div>
        <div class="input-field">
            <input type="text" name="cidade" class="validate" >
            <label>cidade:<label> 
        </div>
        <div class="input-field">
            <input type="text" name="cep" class="validate" >
            <label>Cep:<label> 
        </div>
        
        <button type="submit"class="btn blue">Cadastrar</button>
    </form>
</div>
@endsection