<div class="container">
    <label>Busque pela cidade</label>
    <form action="{{route('site.busca')}}" method="POST" class="form-inline my-3 my-lg-0">
      {{ csrf_field() }}
      <input class="form-control mr-2" style="width: 30%" name="texto" type="text" placeholder="Buscar" aria-label="Search">

         
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
          

      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Filtrar</button>
    </form>
  </div>
  <br><br>