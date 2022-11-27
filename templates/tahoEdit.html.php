<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
<div class="forminput">
    <h3>Tahograf schinbari</h3>
    <form action="" method="post">         
        <input type="hidden" id="id" name="taho[id]" value="<?= $taho['id'] ?? '' ?>">                            
        <label for="taho[tahonumber]">Taho number</label>
        <input name="taho[tahonumber]" value="<?= $taho['tahonumber'] ?? '' ?>">                            
        <label for="taho[tahotypeId]">Type taho</label>
        <input name="taho[tahotypeId]" value="<?= $taho['tahotypeId'] ?? '' ?>">                           
        <input type="submit" value="save">                           
    </form>
</div>
</div>
    <div class="col-2 col-s-2"></div>

 </div>
 