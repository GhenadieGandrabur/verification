 <div class="lt">
     <p>Tahograf schinbari</p>
     <form action="" method="post">
         <div class="col-50"><label for="taho[id]">ID</label></div>
         <div class="col-50"><input  name="taho[id]" value="<?= $taho['id'] ?? '' ?>"></div>

         <div class="col-50"><label for="taho[modele]">Modele</label></div>
         <div class="col-50"><input name="taho[modele]" value="<?= $taho['modele'] ?? '' ?>"></div>

         <div class="col-50"><label for="taho[type]">Type</label></div>
         <div class="col-50"><input name="taho[type]" value="<?= $taho['type'] ?? '' ?>"></div>

         <div class="col-50"><label for="tahp[number]">Number</label></div>
         <div class="col-50"><input name="taho[number]" value="<?= $taho['number'] ?? '' ?>"></div>

         <div class="col-50"><label for="submit"></label></div>
        <div class="col-50"><input type="submit" name="submit" value="Save"></div>
 </form>


 