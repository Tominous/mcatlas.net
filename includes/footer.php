<img id="antartica-bg" src="/img/antartica.png" alt="antartica">

<div class="footer">
    <div id="copyright">
        <img src="/img/ruinscraft-scaled.png" style="width:5rem;height:auto;padding:15px;" alt="ruinscraft-logo">
        <p>
            MCATLAS is a Minecraft server by <a href="https://ruinscraft.com">Ruinscraft</a>.
            &copy;
            <?php
            if (!ini_get('date.timezone')) {
                date_default_timezone_set('GMT');
            }
            echo date("Y");
            ?> Ruinscraft, LLC.
        </p>
        <p>Minecraft is a registered trademark of Microsoft Corporation.</p>
    </div>
    <div id="social">
        <p>
            <a href="/terms-and-privacy">Terms and Privacy</a><br>
            <a href="/contact">Contact</a><br>
            <a href="https://twitter.com/ruinscraft">Twitter</a><br>
            <a href="https://facebook.com/RuinscraftMinecraftServer">Facebook</a><br>
            <a href="https://github.com/Ruinscraft">GitHub</a><br>
            <a href="https://www.youtube.com/user/royalkingkb">YouTube</a><br>
        </p>
    </div>
</div>