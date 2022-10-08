
 <div class="lt  forform"> 
  <h3>Tyres size edit</h3>
  <form action="" method="post">    
      <label for="tyre[id]">ID</label>
      <input type="" name="tyre[id]" value="<?= $tyre['id'] ?? '' ?>">
      <label for="tyre[size]">Tyre size</label>
      <input name="tyre[size]" value="<?= $tyre['size'] ?? '' ?>">     
      <label for="submit"></label>
      <input type="submit" name="submit" value="Save"></input>
  </form>
 </div>
 
