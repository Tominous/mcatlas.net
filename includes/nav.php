<div class="bg"></div>
<div class="bg-trans"></div>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<nav class="navbar">
    <?php
    if (basename($_SERVER['PHP_SELF']) != "index.php") {
        echo '<a class="button" href="https://mcatlas.net/">HOME</a>';
    }
    ?>
    <a class="button gold-text" href="https://mcatlas.net/vote">VOTE</a>
    <a class="button" href="https://mcatlas.net/map">MAP</a>
    <a class="button" href="https://mcatlas.fandom.com">WIKI</a>
    <a class="button" href="https://mcatlas.net/bans">BANS</a>
    <a class="button" href="#">DISCORD</a>
</nav>