 <div class="row">
<div class="col-2 col-s-2"></div>
<div class="col-8 col-s-8">
    <h1>Vehicole</h1>
    <p><button class="button"  onclick="newvehicle()"> NOU </button> in BD sunt <b> <?= $totalvehicles ?></b> vehicole</p>   
    <table class="fortable">
        <tr>
    <th>Id</th>
    <th>Numberplate</th>
    <th>VIN</th>
    <th>YearProduction</th>    
    <th>TahoId</th>
    <th>Tyresize</th>
    <th>Owner</th>
    <th>Edit</th>
    <th>Delite</th>

        </tr>
    <?php foreach($vehicles as $vehicle):?>
        <tr>
            <td><?= $vehicle->id ?></td>
            <td><?= $vehicle->numberplate ?></td>
            <td><?= $vehicle->vin ?></td>   
            <td><?= $vehicle->yearProduction ?></td>   
            <td><?= $vehicle->tahoId ?></td>   
            <td><?= $vehicle->tyresize ?></td>   
            <td><?= $vehicle->owner ?></td>   
            <td>               
                <a href="/vehicle/edit?id=<?= $vehicle->id ?>"> Edit</a>
                
            </td>
            <td>
                <form action="/vehicle/delete" method="post">
                        <input type="hidden" name="id" value="<?= $vehicle->id ?>">
                        <input type="submit"    value="❌">
                    </form>                    
            </td>        
        </tr>
        <?php endforeach;?>
    </table>
</div>
    <div class="col-2 col-s-2"></div>
</div>