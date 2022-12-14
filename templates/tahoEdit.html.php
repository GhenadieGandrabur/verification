<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">

    <h3>Tahograf schinbari</h3>
    <form action="" method="post" class="formwork" >         
        <input type="hidden" id="id" name="taho[id]" value="<?= $taho->id  ?? ''?>">                            
        <label for="taho[tahonumber]">Taho number</label>
        <input name="taho[tahonumber]" value="<?= $taho->tahonumber  ?? '' ?>">                            
        <label for="taho[tahotypeId]">Type taho</label>
        <select name="taho[tahotypeId]">
            <option disabled selected></option>
        <?php foreach($tahotypes as $tahotype):?>
            <option value="<?=$tahotype->id?>" <?= $tahotype->id ===( $taho->tahotypeId?? null) ?"checked selected ": "" ?>><?=$tahotype->typetaho?></option>
        <?php endforeach;?>
        </select>
                                
        <input type="submit" value="save">                           
    </form>

</div>
    <div class="col-2 col-s-2"></div>

 </div>
 