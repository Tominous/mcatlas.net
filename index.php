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

    <div class="content">
        <div class="content-section top-border">
            <h1>EXPLORE MCATLAS</h1>
            <p>Have you ever wanted to play in a Minecraft world that is just like the real world?</p>
            <p>MCATLAS hosts a 1:500 scale replica of the real world (except it's flat)! You can create towns, form
                countries, go to war, and most importantly, have loads of fun with friends on this unique server
                experience.</p>
            <p>You can view a real-time map of the world <a href="/map">here!</a></p>
        </div>

        <div class="content-section top-border">
            <h1>WORLD STATS</h1>
            <?php include('includes/stats.php') ?>
        </div>

        <div class="content-section top-border">
            <h1>LEARN TO PLAY</h1>
            <ul id="help-list">
                <li><a href="#">Create a town</a></li>
                <li><a href="#">Create a town</a></li>
                <li><a href="#">Create a town</a></li>
                <li><a href="#">Create a town</a></li>
                <li><a href="#">Create a town</a></li>
            </ul>
        </div>

        <div class="content-section top-border">
            <h1>THE RULES</h1>
            <p>To play on our server, you must follow these rules:</p>
            <ol id="rule-list">
                <li>Do not use client-side cheats or hacks.</li>
                <li>Do not exploit any server-side bugs. <a href="#">Report them!</a></li>
                <li>Do not attempt to lag or cause harm to the server.</li>
                <li>No inappropriate material (builds, chat, etc). Includes swearing. Keep it PG.</li>
                <li>No griefing or defacing the surface of the world.</li>
                <li>No harassing or bullying other players.</li>
                <li>Do not advertise other servers or products.</li>
            </ol>
        </div>

        <div class="content-section top-border">
            <h1>JOIN OUR TEAM</h1>
            <p>Join an extremely talented and hard-working team that volunteer to make this server possible.</p>
            <p><a href="https://ruinscraft.com/forums/staff-applications/">Apply here</a></p>
        </div>
    </div>

    <?php include('includes/footer.php') ?>
</body>

</html>