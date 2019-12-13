@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
        <h3>Pedidos de adoção</h3>
        <h6>tabela mostra os animais que vc colocou em adoção e que tem pessoas querendo adotar</h6>
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
                    <td>{{$animal->pedinte_nome}}</td>
                    colocar o email de quem ta pedindo pra adotar
                </tr>
            @endforeach 
        </tbody>
      </table>
    </div>

@endsection