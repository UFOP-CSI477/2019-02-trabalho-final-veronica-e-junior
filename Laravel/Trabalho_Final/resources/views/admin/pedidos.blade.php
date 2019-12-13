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
              <th>E-mail</th>
              <th>Id Animal</th>
              <th>Nome Animal</th>
              <th><th>
          </tr>
        </thead>

        <tbody>
          <!-- Tem que mudar aq -->
            @foreach($animais as $animal)
                <tr scope="row">
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->pedinte_nome}}</td>
                    <td>{{$animal->email}}</td>
                    <td>{{$animal->animal_id}}</td>
                    <td>{{$animal->animal_nome}}</td>
                    <td>  <a class="btn green" href="{{ route('admin.animal.finalizaradocao',$animal->id) }}">Permitir adoção</a></td>
                </tr>
            @endforeach 
        </tbody>
      </table>
    </div>

@endsection