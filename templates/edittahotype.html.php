 <div class="lt"> 
  <h3 class="inputheader">Taho type edit</h3>
  <form action="" method="post">    
      <div class="col-50"><label for="tahotype[id]">ID</label></div>
      <div class="col-50"><input type="hidden"  name="tahotype[id]" value="<?= $tahotype['id'] ?? '' ?>"></div>
      <div class="col-50"><label for="tahotype[type]">Type</label></div>
      <div class="col-50"><input  name="tahotype[type]" value="<?= $tahotype['type'] ?? '' ?>"></div>
      <div class="col-50"><label for="tahotype[recordertype]">Type recorder</label></div>
      <div class="col-50"><select name="tahotype[recordertype]">        
               <option value="<?=$taho["recordertype"]=  '0'?>">Analog</option>
               <option value="<?=$taho["recordertype"] = '1'?>">Digital</option> 
      </select></div>
      <div class="col-50"><label for="tahotype[submit]"></label></div>      
      <input type="submit" name="submit" value="Save changes">
  </form>
  <hr>
 </div>
 