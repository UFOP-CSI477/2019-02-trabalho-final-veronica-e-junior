<!--<div class="row section">
	<h3 align="center">Animais para adoção</h3>
	<div class="divider">
		<br>
		 @include('layouts._site._filtros') 
	</div>
</div>
<div class="row section">
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="" alt="Título do Imóvel"></a>
			</div>
			<div class="card-content">
				<p><b class="teal-text darken-2">ADOTE</b></p>
				<p><b>Nome do bichinho</b></p>
				<p>Descricao do bichinho</p>
			</div>
			<div class="card-action">
				<a class=" teal-text lighten-3" href="">Ver mais..</a>
			</div>
		</div>
	</div> -->


<div class="row section">
	<h3 align="center">Animais para adoção</h3>
	<div class="divider"></div>
	<br>
</div>
<div class="row section">
@foreach($animais as $animal)	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="{{ route('site.animal',[$animal->id,str_slug($animal->nome,'_')]) }}"><img src="{{ asset('$animal->imagem') }}" alt="{{ $animal->nome }}"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1"></b></p>
				<p><b>{{ $animal->nome }}</b></p>
				<p>{{ $animal->descricao }}</p>
			</div>
			<div class="card-action">
				<a href="{{ route('site.animal',[$animal->id,str_slug($animal->nome,'_')]) }}">Ver mais..</a>
			</div>
		</div>
	</div>
@endforeach