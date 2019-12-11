<div class="row">
	<form action="{{route('site.busca')}}" >
		<div class="input-field col s6 m4">
			<select name="especie">
			<!--	<option {{ isset($busca['especie']) && $busca['especie'] == 'caes' ? 'selected' : '' }} value="caes">Cães</option>
				<option {{ isset($busca['especie']) && $busca['especie'] == 'gatos' ? 'selected' : '' }} value="gatos">Gatos</option>
			</select> -->
			<label>Espécie</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="sexo">
			<!--	<option {{ isset($busca['sexo']) && $busca['sexo'] == 'ambos' ? 'selected' : '' }} value="ambos">Ambos</option>
				<option {{ isset($busca['sexo']) && $busca['sexo'] == 'fema' ? 'selected' : '' }} value="femea">Fêmea</option>
				<option {{ isset($busca['sexo']) && $busca['sexo'] == 'macho' ? 'selected' : '' }} value="macho">Macho</option> -->
			</select>
			<label>Sexo</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="cidade">

			</select>
			<label>Cidade</label>
		</div>
	<div class="input-field col s6 m4">
			<select name="estado">
			
			</select>
			<label>Estado</label>
		</div>
			</select>
		<div class="input-field col s12 m2">
			<button class="btn deep-range darken-1 right">Filtrar</button>
		</div>
	</form>
</div>