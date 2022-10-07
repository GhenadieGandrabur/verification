<div class="container">
    <h3>Autovehicole</h3>
 <p><button class="button"  onclick="newauto()"> NOU </button> in BD sunt <b> <?= $totalautos ?></b> autovehicole</p>   
<table class="forwindow">
    <th>Id</th>
    <th>Numar</th>
    <th>Proprietar</th>
    <th>Proprietar</th>
    <th>Proprietar</th>
    <?php foreach($autos as $auto):?>
        <tr>
            <td><?= htmlspecialchars($auto['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($auto['numberplate'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($auto['owner'], ENT_QUOTES, 'UTF-8') ?></td>   
            <td>               
                    <a href="/auto/edit?id=<?= $auto['id'] ?>"> Edit</a>
                           
            </td>
            <td>
                    <form action="/auto/delete" method="post">
                        <input type="hidden" name="id" value="<?= $auto['id'] ?>">
                        <input type="submit"    value="Delete">
                    </form>                    
            </td>        
        </tr>
        <?php endforeach;?>
</table>
</div>