<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php') ?>

<body>
    <div class="splash">
        <?php include('includes/nav.php') ?>

        <img class="logo" src="/img/mcatlas-scaled.png" alt="logo">

        <div id="connect">
            <h1>JOIN THE FUN</h1>
            <p>Put this address in your Minecraft Multiplayer</p>
            <span class="address">play.mcatlas.net</span>
        </div>
    </div>

    <div class="content-minified">
        <div class="content-section">
            <hr>
            <h1>EXPLORE MCATLAS</h1>
            <p>Have you ever wanted to play in a Minecraft world that is just like the real world?</p>
            <p>MCAtlas hosts a 1:1000 scale replica of the Earth in Minecraft! You can create towns, form nations, build an empire or become a hobbit. There are real life ore deposits and live weather! It's a unique experience, even more fun with friends!</p>
            <p>You can view a real-time map of the world <a href="/map">here!</a></p>
        </div>

        <div class="content-section">
            <hr>
            <h1>WORLD STATS</h1>
            <?php include('includes/stats.php') ?>
        </div>

        <div class="content-section">
            <hr>
            <h1>LEARN TO PLAY</h1>
            <ul id="help-list">
                <li><a href="https://github.com/Ruinscraft/mcatlas-wiki/wiki">Getting Started</a></li>
                <li><a href="https://github.com/Ruinscraft/mcatlas-wiki/wiki/How-to-Get-Gold">Getting Gold</a></li>
                <li><a href="https://github.com/Ruinscraft/mcatlas-wiki/wiki/Creating-a-Town">Creating a Town</a></li>
                <li><a href="https://github.com/Ruinscraft/mcatlas-wiki/wiki/Creating-a-Nation">Creating a Nation</a></li>
            </ul>
        </div>

        <div class="content-section">
            <hr>
            <h1>JOIN OUR TEAM</h1>
            <p>Join an extremely talented and hard-working team that volunteer to make this server possible.</p>
            <p><a href="https://ruinscraft.com/forums/staff-applications/">Apply here</a></p>
        </div>
    </div>

    <?php include('includes/footer.php') ?>
</body>

</html>