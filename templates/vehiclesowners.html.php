<div class="row">
    <div class="col-3 col-s-3"></div>
    <div class="col-6 col-s-6">
        <h1>Proprietari de vehicole</h1>
        <button class="button_edit"  onclick="newownesr()">New owner</button><span style="float:right ;"> <?= $totalVehiclesOwners ?> posesori de camioane</span>
        <p><table class="fortable">
            <th>ID</th>
            <th>Denumire</th>
            <th>Cod fiscal</th>    
            <th>Note</th>
            <th>Edit</th>
            <th>Delete</th>
            <tr>
                <?php foreach ($owners as $owner) : ?>
                    <td> <?= $owner-> id ?></td>
                    <td> <?= $owner-> name ?></td>
            <td> <?= $owner-> codfiscal ?></td>
            <td> <?= $owner-> note ?></td>
            <td>               
                    <a href="/vehiclesowners/edit?id=<?= $owner-> id ?>"> Edit</a>                    
                </td>
                <td>
                    <form action="/vehiclesowners/delete" method="post">
                        <input type="hidden" name="id" value="<?= $owner-> id ?>">
                        <input type="submit"  formaction ="/vehiclesowners/delete"   value="❌">
                    </form>                    
            </td>
    </tr>
<?php endforeach; ?>
</table></p>
        </div>
        
        <div class="col-3 col-s-3"></div>
    </div>