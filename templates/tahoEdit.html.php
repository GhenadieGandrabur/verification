<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">

    <h1>Tahograf edit</h1>
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
         <label for="taho[measurementRange]">Measurement range</label>
                    <select name="taho[measurementRange]"> 
                        <option disabled selected></option>       
                        <option value="100 km/h" <?= ($taho->measurementRange ?? null) ===  "100 km/h" ?"checked selected":""?>>100</option> 
                        <option value="125 km/h" <?= ($taho->measurementRange ?? null) ===  "125 km/h" ?"checked selected":""?>>125</option>
                        <option value="140 km/h" <?= ($taho->measurementRange ?? null) ===  "140 km/h" ?"checked selected":""?>>140</option>
                        <option value="180 km/h" <?= ($taho->measurementRange ?? null) ===  "180 km/h" ?"checked selected":""?>>180</option>
                        <option value="220 km/h" <?= ($taho->measurementRange ?? null) ===  "220 km/h" ?"checked selected":""?>>220</option>
                    </select>
                    <input type="submit" value="save">                           
                    
    </form>
</div>
    <div class="col-2 col-s-2"></div>

 </div>