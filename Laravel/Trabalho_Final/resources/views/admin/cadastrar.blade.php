@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" method="POST" class = "form-field">
        {{csrf_field()}}
        <div class="input-field">
            <input type="text" name="name" class="validate" >
            <label>Nome:<label> 
        </div>
        <div class="input-field">
            <input type="text" name="email" class="validate" >
            <label>email:<label> 
        </div>
        <div class="input-field">
            <input type="password" name="password" class="validate" >
            <label>Senha:<label> 
        </div>
        <button type="submit"class="btn blue">Cadastrar</button>
    </form>
</div>
@endsection
