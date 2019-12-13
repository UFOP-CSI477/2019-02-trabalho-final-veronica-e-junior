@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.animal.finalizaradocao')}}" method="POST" enctype="multipart/form-data" class = "form-field">
            {{csrf_field()}}

            <div class="input-field">
                <input type="text" name="id" class="validate hide" value="{{auth()->user()->id}}" >
            </div>

            <div class="input-field">
                <input type="text" name="nome"  >
                <label>Pequena história:<label> 
            </div>

            <div class="file-field input-field ">
        <div class="btn">
        <span>Imagem:</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
   
            <button type="submit"class="btn blue">Cadastrar Final Feliz!</button>
        </form>
    </div>
</div>
@endsection