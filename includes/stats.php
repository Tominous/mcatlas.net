<?php

$mysql_host     = "localhost";
$mysql_user     = "root";
$mysql_pass     = "password";
$mysql_db       = "database";
$mysql_conn     = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($mysql_conn->connect_error) {
    die($mysql_conn->connect_error);
} 

$mysqlq_town_count = "select count(name) from TOWNY_TOWNS;";
$mysqlq_nation_count = "select count(name) from TOWNY_NATIONS;";
$mysqlq_resident_count = "select count(name) from TOWNY_RESIDENTS;";
$mysqlq_unique_count = "select count(playerid) from `lb-players`;";

$rs_town_count = mysqli_query($mysql_conn, $mysqlq_town_count);
$rs_nation_count = mysqli_query($mysql_conn, $mysqlq_nation_count);
$rs_resident_count = mysqli_query($mysql_conn, $mysqlq_resident_count);
$rs_unique_count = mysqli_query($mysql_conn, $mysqlq_unique_count);

$town_count = $rs_town_count->fetch_row()[0];
$nation_count = $rs_nation_count->fetch_row()[0];
$resident_count = $rs_resident_count->fetch_row()[0];
$unique_count = $rs_unique_count->fetch_row()[0];

?>

<table style="display:inline;align-content:center;">
    <tr>
        <td>1</td>
        <td>1:1000 scale map of the Earth!</td>
    </tr>
    <tr>
        <td><?php echo $town_count; ?></td>
        <td>towns</td>
    </tr>
    <tr>
        <td><?php echo $nation_count; ?></td>
        <td>nations</td>
    </tr>
    <tr>
        <td><?php echo $resident_count; ?></td>
        <td>active town members</td>
    </tr>
    <tr>
        <td><?php echo $unique_count; ?></td>
        <td>unique players have joined</td>
    </tr>
</table>
