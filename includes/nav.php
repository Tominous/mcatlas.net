<div class="bg"></div>
<div class="bg-trans"></div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/jquery-eu-cookie-law-popup.js"></script>
<nav class="navbar">
    <?php
    if (basename($_SERVER['PHP_SELF']) != "index.php") {
        echo '<a class="button" href="/">HOME</a>';
    }
    ?>
    <a class="button gold-text" href="/vote">VOTE</a>
    <a class="button" href="/map">MAP</a>
    <a class="button" href="https://mcatlas.fandom.com">WIKI</a>
    <a class="button" href="/bans">BANS</a>
    <a class="button" href="#">DISCORD</a>
</nav>

<div class="eupopup eupopup-bottom"></div>