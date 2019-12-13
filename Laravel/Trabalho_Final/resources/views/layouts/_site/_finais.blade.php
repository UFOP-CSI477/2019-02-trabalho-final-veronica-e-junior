<div class="row section">
	<h3 align="center">Finais Felizes</h3>
	<!--<div class="divider"></div>-->
<!--</div>
<div class="row section"> -->
@foreach($finais as $final)	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="{{ route('site.final',[$final->id,'_')]) }}"><img src="{{ asset($final->imagem) }}" alt="{{ $final->id }}"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1"></b></p>
				<p><b>{{ $final->id }}</b></p>
				<p>{{ $final->descricao }}</p>
			</div>
		</div>
	</div>
@endforeach