 <div class="lt"> 
  <h3 class="inputheader">Tyres size edit</h3>
  <form action="" method="post">    
      <div class="col-50"><label for="tyre[id]">ID</label></div>
      <div class="col-50"><input disabled name="tyre[id]" value="<?= $tyre['id'] ?? '' ?>"></div>
      <div class="col-50"><label for="tyre[size]">Tyre size</label></div>
      <div class="col-50"><input name="tyre[size]" value="<?= $tyre['size'] ?? '' ?>"></div>     
      <div class="col-50"><label for="submit"></label></div>
      <div class="col-50"><input type="submit" name="submit" value="Save"></input><div>
  </form>
 </div>
