
 <div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Formulaire de Programme</div>
<div class="panel-body">

<form method="POST" action="{{ route('programme') }}">
   {{ csrf_field() }}

  
    <div class="form-group">
      <label for="inputEmail4">Nom Programme</label>
      <input type="text" class="form-control" name="nomprogramme" placeholder="Nom Programme">
    </div>
   
   <div class="form-group">
      <label for="inputPassword4">Date debut programme</label>
      <input type="date" class="form-control " name="datedebutprog" placeholder="Date debut programme">
    </div>
  </div>
  <div class="form-group  col-md-12">
    <label for="inputAddress">Date fin programme</label>
    <input type="date" class="form-control" name="datefinprog" placeholder="Date fin programme">
  </div>
  <div class="form-group  col-md-12">
    <label for="inputAddress">Secteur ou Departement</label>
    <input type="text" class="form-control" name="sectoudept" placeholder="Secteur ou Departement">
  </div>

    <div class="form-group col-md-12">
      <label for="inputsituationref">Situation de reference </label>
      <input type="text" class="form-control" name="situationref">
    </div>
  
    <div class="form-group col-md-12">
      <label for="inputCible">Cible</label>
      <input type="text" class="form-control" name="cible">
    </div>

  <button type="submit" class="btn btn-primary">Enregister</button>
</form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
