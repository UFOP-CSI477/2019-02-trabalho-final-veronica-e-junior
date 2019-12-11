@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <!--<h3 align="center">Imóvel</h3> -->
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            @if($animal->galeria()->count())
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                    @foreach($galeria as $imagem)
                        <li>
                            <img src="{{ asset($imagem->imagem) }}">
                            <div class="caption {{ $direcaoImagem[rand(0,2)] }}">
                                <h3>{{ $imagem->titulo }}</h3>
                                <h5>{{ $imagem->descricao }}</h5>
                            </div>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
            @else
            <img class="responsive-img" src="{{ asset($animal->imagem) }}">
            @endif
        </div>
        <div class="col s12 m4">
            <h4>{{ $animal->nome }}</h4>
            <blockquote>
                {{ $animal->descricao }}
            </blockquote>
            <p><b>Endereço:</b> {{ $animal->endereco }}</p>
            <p><b>Cep:</b> {{ $animal->cep }}</p>
            <p>
            <b>Compartilhar: </b>
            <a target="_blank" href="http://www.facebook.com/sharer.php?u={{ isset($seo['url']) ? $seo['url'] : config('app.url') }}"><i class="blue-text mdi mdi-facebook mdi-24px"></i></a>
            <a target="_blank" href="http://twitter.com/intent/tweet?text={{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}&url={{ isset($seo['url']) ? $seo['url'] : config('app.url') }}&via=SiteDinâmico"><i class="blue-text mdi mdi-twitter mdi-24px"></i></a>
            </p>
            <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Quero adotar!</a>
        </div>
    </div>

    <div class="row section">
        <div class="col s12 m8">
            <div class="video-container">
                {!! $imovel->mapa !!}
            </div>
        </div>
@endsection