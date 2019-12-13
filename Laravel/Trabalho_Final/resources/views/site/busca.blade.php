<!DOCTYPE html>
<!--View da Home -->

@extends('layouts.site')

@section('content')

@include('layouts._site._slides')
<div class="container">
   @include('layouts._site._lista_animais')
</div>
@endsection