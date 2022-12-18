<?php if ($loggedIn?? false) : ?>
        <ul class="menu">
       <!-- <li><a href="/">Home</a></li>-->
        <li><a href="/certificates/list">Certificate</a></li>
        <li><a href="/vehiclesowners/list">Proprietari</a></li>
        <li><a href="/vehicles/list">Vehicles</a></li>
        <li><a href="/taho/list">Tahografe</a></li>
        <li><a href="/tahotype/list">Type taho</a></li>
        <li><a href="/tyres/list">Tyres</a></li>
        <li><a href="/users/list">Users</a></li>            
            <li><a href="/logout">Log out</a></li>
      <!--  
            <li><a href="/login">Log in</a></li>     -->       
        </ul>
        <?php endif; ?>

