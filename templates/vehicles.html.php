 <div class="row">
<div class="col-2 col-s-2"></div>
<div class="col-8 col-s-8">  
    
     <h1 class="inlin" style="width:200px">Vehicles</h1>
     <h1 class="inlin"  style="float: right; font-size:small">In BD sunt <b><?= $totalvehicles ?></b>  vehicole. </h1>
    
     <br>
    <div ><button class="button_edit"  onclick="newvehicle()"> New vehicle </button></div> 

    <table class="fortable">
        <tr>
    <th>Id</th>
    <th>Number</th>
    <th>VIN</th>
    <th>Y/P</th>    
    <th>Brand</th>    
    <th>Modele</th>    
    <th>Taho nr.</th>
    <th>Tyresize</th>
    <th>Owner</th>
    <th>Edit</th>
    <th>Delite</th>

        </tr>
    <?php foreach($vehicles as $vehicle):?>
        <tr>
            <td><?= $vehicle->id ?></td>
            <td><?= $vehicle->numberplate?></td>
            <td><?= $vehicle->vin ?></td>   
            <td><?= $vehicle->yearproduction ?></td>   
            <td><?= $vehicle->brand?></td>   
            <td><?= $vehicle->model?></td>   
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