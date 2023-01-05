<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">   
              
        <form action="" method="POST" class="classic"> 
            <table class="tableedit b">
                <tr><th colspan="2" class="bgg tc"> <h3>Tyres size edit</h3> </th></tr>
                <tr><td colspan="2"><input type="hidden" name="tyre[id]" value="<?= $tyre->id ?? '' ?>"></td></tr>
                <tr>
                    <td> <label for="ts">Tyre size</label></td>
                    <td><input id="ts" name="tyre[size]" value="<?= $tyre->size ?? '' ?>"></td>
                </tr>
                <tr><td colspan="2" class="tc"><input type="submit" name="submit" value="Save"></td></tr>
            </table>            
        </form>
    </div>
    <div class="col-4 col-s-4"></div>
</div>
 
