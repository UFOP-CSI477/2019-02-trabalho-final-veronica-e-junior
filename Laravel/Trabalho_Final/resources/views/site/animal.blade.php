@extends('layouts.site')

@section('content')





<div class="container">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href="{{ route('site.animal',[$animal->id,str_slug($animal->nome,'_')]) }}"><img src="{{ asset($animal->imagem) }}" alt="{{ $animal->nome }}"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">
                <p><b>{{ $animal->nome }}</b></p>
                <p>{{ $animal->descricao }}</p>
            </div>
        </div>
    </div>       
    <br>
        <form action="{{route('admin.pedir-adocao')}}" method="POST" class = "form-field">
                 {{csrf_field()}}
            <div class="input-field">
                <input type="text" name="user_pedinte_id" class="validate hide" value="{{auth()->user()->id}}" >
            </div>

            <div class="input-field">
                <input type="text" name="user_dono_id" class="validate hide" value="{{$animal->user_dono_id}}" >
            </div>

            <div class="input-field">
                <input type="text" name="animal_id" class="validate hide" value="{{$animal->id}}" >
            </div>
              <button type="submit"class="btn blue">Quero Adotar!</button>
          </form>
<br><br>

            
        </div>
    </div>




@endsection