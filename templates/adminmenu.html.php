
<div class="topnav" id="myTopnav">     
<?php if ($loggedIn?? false) : ?>
        <a href="/certificates/list" class="active">Certificate</a>
        <a href="/vehicles/list">Vehicles</a>
        <a href="/brands/list">Brands</a>
        <a href="/vehiclesowners/list">Proprietari</a>
        <a href="/taho/list">Tahografe</a>
        <a href="/tahotype/list">Type taho</a>
        <a href="/tyres/list">Tyres</a>
        <a href="/users/list">Users</a>            
        <a href="/logout">Log out</a>
        <a href="javascript:void(0);" class="icon" onclick="myMenu()">
    <i class="fa fa-bars"></i></a>
    <?php endif; ?>
</div>

