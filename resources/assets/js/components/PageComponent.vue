<template>
    <div class="container">
    <div class="row">
     <div class="col-md-8 col-md-offset-2">
        
          <form method="POST" action="/activite" id="form-activite">
                    {{ csrf_field() }}
     <div class="form-group ">
     <div class="form-group col-md-4">
     <label for="inputEmail4">Libelle Activite</label>
     <input type="text" class="form-control" name="libelleactivite" placeholder="Libelle Activite">
     </div>
     </div>
     <div class="form-group">
     <div class="form-group col-md-4">
     <label for="inputEmail4">Periode</label>
     <input type="number" class="form-control" name="Periode" placeholder="Periode">
     </div>
     </div>
     <button type="submit" class="btn btn-primary"  >Enregister</button>
     <button type="submit" class="btn btn-primary" onclick="ajouter()">Ajouter </button>
           </form>
    
                              </div>
                    </div>
    </div>
</template>

<script>
    
   function ajouter() 
   {
    document.getElementById("demo").style.color = "red";
} 
</script>
