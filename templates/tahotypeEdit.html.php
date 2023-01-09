<div class="row">
        <div class="col-4 col-s-4"></div>
        <div class="col-4 col-s-4">              
        
        <form action="" method="post" class="classic">
        <table class="tableedit b">
            <tr><td colspan="2" class="tc bgg"><h3>Taho type edit</h3></td></tr>
            <tr><td><input type="hidden"  name="tahotype[id]" value="<?= $tahotype->id ?? '' ?>"></td></tr>
            <tr><td><label for="tahotype[typetaho]">Type</label></td><td><input  name="tahotype[typetaho]" value="<?= $tahotype->typetaho ?? '' ?>"></td></tr>
            <tr>
            <td><label for="tahotype[recordertype]">Type recorder</label></td>
            <td>
            <select name="tahotype[recordertype]"> 
            <option disabled selected></option>       
            <option value="1" <?= ($tahotype->recordertype?? null) ===  1 ?"checked selected":""?>>Digital</option> 
            <option value="0" <?= ($tahotype->recordertype?? null) ===  0 ?"checked selected":""?>>Analog</option>
            </select>
            </td>
            </tr>
            <tr>
                <td colspan="2" class="tc"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>       
        </form>
        </div>
        <div class="col-4 col-s-4 "></div>
</div>