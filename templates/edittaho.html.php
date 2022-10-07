 <div class="lt forform">
     <h3>Tahograf schinbari</h3>
     <form action="" method="post">
         <div class="col-50"><label for="id">ID</label></div>
         <div class="col-50"><input type="hidden" id="id" name="taho[id]" value="<?= $taho['id'] ?? '' ?>"></div>

         <div class="col-50"><label for="taho[modele]">Modele</label></div>
         <div class="col-50"> <select name="taho[modele]">
                              <option value="<?=$taho["modele"]=  'VDO 1314'?>">VDO 1314</option>
                              <option value="<?=$taho["modele"] = 'VDO 1318'?>">VDO 1318</option>                              
                              <option value="<?=$taho["modele"] = 'VDO 1324'?>">VDO 1324</option>                              
                              <option value="<?=$taho["modele"] = 'VDO 1381'?>">VDO 1381</option>                              
                              <option value="<?=$taho["modele"] = 'VR 8400'?>">VR 8400</option>                              
                              <option value="<?=$taho["modele"] = 'VR 2400'?>">VR 2400</option>                              
                              <option value="<?=$taho["modele"] = 'SE 5000'?>">SE 5000</option>                              
                              </select></div>

         <div class="col-50"><label for="taho[type]">Type</label></div>
         <div class="col-50"><input name="taho[type]" value="<?= $taho['type'] ?? '' ?>"></div>

         <div class="col-50"><label for="tahp[number]">Number</label></div>
         <div class="col-50"><input name="taho[number]" value="<?= $taho['number'] ?? '' ?>"></div>

         <div class="col-50"><label for="submit"></label></div>
        <div class="col-50"><input type="submit" name="submit" value="Save"></div>
 </form>

 </div>
 