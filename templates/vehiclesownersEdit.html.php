 <div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
  <h1>Proprietatii edit</h1>
  <form action="" method="post" class="formwork">   
    <label for="id">ID</label> 
    <input id="id" type=""  name="owner[id]" value="<?= $owner->id ?? '' ?>">
    
    <label for="name">Name</label>
    <input id = "name" name="owner[name]" value="<?= $owner->name ?? '' ?>">
    
    <label for="codfiscal">Codfiscal</label>
    <input id="codfiscal" name="owner[codfiscal]" value ="<?= $owner->codfiscal ?? '' ?>">
    
    <label for="note">Note</label>
    <input id="note" name="owner[note]" value ="<?= $owner->note ?? '' ?>">
    
    <input type="submit" name="submit" value="Save">      
  </form>
</div>
<div class="col-4 col-s-4"></div>
 </div>

    
      
  
 
