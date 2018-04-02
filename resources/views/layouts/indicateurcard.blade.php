<form   method="POST" action="{{ route('indicateur') }}">
        {{ csrf_field() }}

  <div class="form-group">
   
     <div class="form-group col-md-6">
      <label for="inputEmail4">Nom indicateur</label>
      <input type="text" class="form-control" name="nomindicateur" placeholder="Nom indicateur">
      </div>
      <div class="form-group col-md-6">
      <label for="inputPassword4">Valeur Indicateur</label>
      <input type="number" class="form-control" name="valeurindicateur" placeholder="Valeur Indicateur">
      </div>  
       <div class="form-group col-md-6">
      <label for="inputEmail4">Nom indicateur</label>
      <input type="text" class="form-control" name="nomindicateur" placeholder="Nom indicateur">
      </div>
      <div class="form-group col-md-6">
      <label for="inputPassword4">Valeur Indicateur</label>
      <input type="number" class="form-control" name="valeurindicateur" placeholder="Valeur Indicateur">
      </div>     
       <div class="form-group col-md-6">
      <label for="inputEmail4">Nom indicateur</label>
      <input type="text" class="form-control" name="nomindicateur" placeholder="Nom indicateur">
      </div>
      <div class="form-group col-md-6">
      <label for="inputPassword4">Valeur Indicateur</label>
      <input type="number" class="form-control" name="valeurindicateur" placeholder="Valeur Indicateur">
      </div>     



   <!--<input type="submit" name="enregistrer">
<input type="submit" name="ajouter">

 Fonts -->


<button type="submit" class="btn btn-primary"  >Enregister</button>



</form>
<button  type="submit" class="btn btn-primary" >Ajouter</button>
