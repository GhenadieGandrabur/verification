 <div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">  
  <form action="" method="post" class="classic">
    <table class="tableedit b">    
      <tr><td colspan="2" class="bgg tc"><h3>Owner edit</h3></td>
      <tr>        
        <td colspan="2"><input id="id" type="hidden"  name="owner[id]" value="<?= $owner->id ?? '' ?>"></td>
      </tr>
      <tr>
        <td><label for="name">Name</td>
        <td><input id = "name" name="owner[name]" value="<?= $owner->name ?? '' ?>"></td>
      </tr>
      <tr>
        <td><label for="codfiscal">Cod fiscal</label></td>
        <td><input id="codfiscal" name="owner[codfiscal]" value ="<?= $owner->codfiscal ?? '' ?>"></td>
      </tr>
      <tr>
        <td><label for="note">Note</label></td>
        <td><input id="note" name="owner[note]" value ="<?= $owner->note ?? '' ?>"></td>
      </tr>
      <tr><td colspan="2" class="tc"><input type="submit" name="submit" value="Save"></td>
    </table>
 
  </form>
</div>
<div class="col-4 col-s-4"></div>
 </div>

    
      
  
 
