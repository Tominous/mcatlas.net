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

$rs_town_count = mysql_query($mysqlq_town_count);
$rs_nation_count = mysql_query($mysqlq_nation_count);
$rs_resident_count = mysql_query($mysqlq_resident_count);

$town_count = $rs_town_count[0];
$nation_count = $rs_nation_count[0];
$resident_count = $rs_resident_count[0];

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
</table>
