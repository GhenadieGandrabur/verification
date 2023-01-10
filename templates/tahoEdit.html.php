<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">

    
    <form action="" method="post" class="classic " > 
    <table class="tableedit b">
    <tr>
        <td colspan="2" class="bgg tc"><h3>Tahograf edit</h3></td>
    </tr>
    <tr>
        <td colspan="2"><input type="hidden" id="id" name="taho[id]" value="<?= $taho->id  ?? ''?>"></td>
    </tr>
    <tr>
        <td><label for="taho[tahonumber]">Taho number</label></td>
        <td><input name="taho[tahonumber]" value="<?= $taho->tahonumber  ?? '' ?>"></td>
    </tr>
    <tr>
        <td><label for="taho[tahotypeId]">Type taho</label></td>
        <td>
            <select name="taho[tahotypeId]">
            <option disabled selected></option>
            <?php foreach($tahotypes as $tahotype):?>                
            <option value="<?=$tahotype->id?>" <?= $tahotype->id ===( $taho->tahotypeId?? null) ?"checked selected ": "" ?>><?=$tahotype->typetaho?></option>
        
            <?php endforeach;?>
            </select>
        </td>
    </tr>
    <tr>
       <td>
        <label for="taho[measurementRange]">Measurement</label>
       </td>
            <td>
            <select name="taho[measurementRange]"> 
            <option disabled selected></option>       
            <option value="100 km/h" <?= ($taho->measurementRange ?? null) ===  "100 km/h" ?"checked selected":""?>>100</option>            
            <option value="125 km/h" <?= ($taho->measurementRange ?? null) ===  "125 km/h" ?"checked selected":""?>>125</option>
            <option value="140 km/h" <?= ($taho->measurementRange ?? null) ===  "140 km/h" ?"checked selected":""?>>140</option>
            <option value="180 km/h" <?= ($taho->measurementRange ?? null) ===  "180 km/h" ?"checked selected":""?>>180</option>
            <option value="220 km/h" <?= ($taho->measurementRange ?? null) ===  "220 km/h" ?"checked selected":""?>>220</option>
            </select>
        </td>
    </tr>
   
    
    <tr>
        <td colspan="2" class="tc"><input type="submit" value="save"> </td>
    </tr>
    </table>        
        
    </form>
</div>
    <div class="col-2 col-s-2"></div>

 </div>