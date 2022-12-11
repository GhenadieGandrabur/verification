 <div class="row">
<div class="col-3 col-s-3"></div>
<div class="col-6 col-s-6">
    <h3>Autovehicole</h3>
    <p><button class="button"  onclick="newauto()"> NOU </button> in BD sunt <b> <?= $totalautos ?></b> autovehicole</p>   
    <table class="fortable">
    <th>Id</th>
    <th>Numar</th>
    <th>Proprietar</th>
    <th>Proprietar</th>
    <th>Proprietar</th>
    <?php foreach($autos as $auto):?>
        <tr>
            <td><?= $auto->numberplate ?></td>
            <td><?= $auto->owner ?></td>   
            <td><?= $auto->id ?></td>
            <td>               
                <a href="/auto/edit?id=<?= $auto->id ?>"> Edit</a>
                
            </td>
            <td>
                <form action="/auto/delete" method="post">
                        <input type="hidden" name="id" value="<?= $auto->id ?>">
                        <input type="submit"    value="❌">
                    </form>                    
            </td>        
        </tr>
        <?php endforeach;?>
    </table>
</div>
    <div class="col-3 col-s-3"></div>
</div>