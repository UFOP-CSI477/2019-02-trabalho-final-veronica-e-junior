@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
        <h3>Animais que você pediu em adoção</h3>
        <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
          </tr>
        </thead>

        <tbody>
          <!-- Tem que mudar aq -->
            @foreach($animais as $animal)
                <tr scope="row">
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->nome}}</td>
                    seria interessante add um atributo chamado status na nossa tabela adota, 
                    que ai apareceria (em espera) ou algo do tipo pra pessoa que ta pedindo adoção
                </tr>
            @endforeach 
        </tbody>
      </table>
    </div>

@endsection