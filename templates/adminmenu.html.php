<div class="navbar">
    <a href="/">Home</a>
    <a href="/certificates/list">Certificates</a>
    <a href="/vehicles/list">Vehicles</a>
    <a href="/tachographs/list">Tahographs</a>
    <a href="/users/list">Users</a>
    <?php if ($loggedIn) : ?>
        <li><a href="/logout">Log out</a>
        </li>
    <?php else : ?>
        <li><a href="/login">Log in</a></li>
    <?php endif; ?>
</div>