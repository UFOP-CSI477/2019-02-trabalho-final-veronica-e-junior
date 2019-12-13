@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
        <h3>Seu histórico de animais colocados em adoção</h3>
        <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
          </tr>
        </thead>

        <tbody>
            @foreach($animais as $animal)
                <tr scope="row">
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->nome}}</td>
                    <td><a class="btn orange" href="{{ route('admin.editar-animal',$animal->id) }}">Editar</a></</td>
                     <td><a class="btn red" href="">Deletar</a></</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>

@endsection


<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

