@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.salvar-final')}}" method="POST" enctype="multipart/form-data" class = "form-field">
            {{csrf_field()}}



            <div class="file-field input-field ">
        <div class="btn">
        <span>Imagem:</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>

                
            <div class="input-field">
                <input type="text" name="descricao" >
                <label>Descrição:<label> 

    <br><br>
            
            <button type="submit"class="btn blue">Postar Final Feliz!</button>
        </form>
    </div>
</div>
@endsection