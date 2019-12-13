<div class="container">
    <label>Busque pela cidade</label>
    <div class="row">
        <div class="card  grey lighten-3">
            <div class="card-content white-text" align="center">
            <span class="card-title black-text">Faça uma busca</span>
                <form action="{{route('site.busca')}}" method="POST" class="form-inline my-3 my-lg-0">
                    {{ csrf_field() }}
                    <input class="form-control mr-2" style="width: 80%" name="texto" type="text" placeholder="Cidade" aria-label="Search">
                    <br>
            
                    <label>
                        <input class="especie" name="especie" type="radio" value="cachorro" />
                        <span>Cães</span>
                    </label>
                
                    <label>
                        <input class="especie" name="especie" type="radio" value="gato"/>
                        <span>Gatos</span>
                    </label>
            
                
            
                    <label>
                        <input class="sexo" name="sexo" type="radio" value="femea" />
                        <span>Fêmeas</span>
                    </label>
            
                    <label>
                        <input class="sexo" name="sexo" type="radio" value="macho"/>
                        <span>Machos</span>
                    </label>
                    <br><br>
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Filtrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <br><br>