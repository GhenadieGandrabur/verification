<div class="container">
<h3>Proprietari de vehicole</h3>
<p><button class="button"  onclick="newownesr()">New owner</button> <?= $totalVehiclesOwners ?> posesori de camioane</p>
<p><table class="forwindow">
    <th>ID</th>
    <th>Denumire</th>
    <th>Cod fiscal</th>    
    <th>Note</th>
    <th>Edit</th>
    <th>Delete</th>
    <tr>
        <?php foreach ($owners as $owner) : ?>
            <td> <?= htmlspecialchars($owner['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($owner['name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($owner['codfiscal'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($owner['note'], ENT_QUOTES, 'UTF-8') ?></td>
            <td>               
                    <a href="/vehiclesowners/edit?id=<?= $owner['id'] ?>"> Edit</a>
                           
            </td>
            <td>
                    <form action="/vehiclesowners/delete" method="post">
                        <input type="hidden" name="id" value="<?= $owner['id'] ?>">
                        <input type="submit"  formaction ="/vehiclesowners/delete"   value="Delete">
                    </form>                    
            </td>
    </tr>
<?php endforeach; ?>
</table></p>
        </div>