 <div class="lt forform"> 
  <h3>Proprietatii edit</h3>
  <form action="" method="post">   
      <label for="id">ID</label> 
      <input id="id" type=""  name="owner[id]" value="<?= $owner['id'] ?? '' ?>">

      <label for="name">Name</label>
      <input id = "name" name="owner[name]" value="<?= $owner['name'] ?? '' ?>">

      <label for="codfiscal">Codfiscal</label>
      <input id="codfiscal" name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>">

      <label for="note">Note</label>
      <input id="note" name="owner[note]" value ="<?= $owner['note'] ?? '' ?>">

      <input type="submit" name="submit" value="Save">
      
      
    </form>
    
      
  
 
