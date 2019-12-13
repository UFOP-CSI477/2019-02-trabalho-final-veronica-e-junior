@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.salvar-animal')}}" method="POST" class = "form-field">
            {{csrf_field()}}

            <div class="input-field">
                <input type="text" name="id" class="validate hide" value="{{auth()->user()->id}}" >
            </div>

            <div class="input-field">
                <input type="text" name="nome"  >
                <label>Nome:<label> 
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
    <!--<div class="col m6 s12">
    @if(isset($pagina->imagem))
        <img width="120" src="{{ asset($pagina->imagem) }}">
    @endif
    </div> -->

            <label>Espécie:<label>
            <p>
                <label>
                    <input name="especie" type="radio" value="cachorro" />
                    <span>Cachorro</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="especie" type="radio" value="gato"/>
                    <span>Gato</span>
                </label>
            </p>
            
            <label>Sexo:<label>
            <p>
                <label>
                    <input name="sexo" type="radio" value="femea" />
                    <span>Fêmea</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="sexo" type="radio" value="macho"/>
                    <span>Macho</span>
                </label>
            </p>
                
            <div class="input-field">
                <input type="text" name="descricao" >
                <label>Descrição:<label> 
            </div>
            <div class="input-field">
                <input type="text" name="cidade" >
                <label>Cidade:<label> 
            </div>

            <!--Começo Estados usando radio -->
                        <label>Estado:<label>
            <p>
                <label>
                    <input name="estado" type="radio" value="ES" />
                    <span>Espirito Santo</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="estado" type="radio" value="MG"/>
                    <span>Minas Gerais</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="estado" type="radio" value="RJ" />
                    <span>Rio de Janeiro</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="estado" type="radio" value="SP"/>
                    <span>São Paulo</span>
                </label>
            </p>
            <!--Fim Estados usando radio -->

            <!-- 
            <div class="input-field">
                <select>
                    <option value="" disabled selected>Selecione um estado</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                </select>
                <label>Estado</label>
            </div>
            -->
            
            <div class="input-field">
                <input type="text" name="cep" >
                <label>Cep:<label> 
            </div>


    <br><br>
            
            <button type="submit"class="btn blue">Cadastrar</button>
        </form>
    </div>
</div>
@endsection