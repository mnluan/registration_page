<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassoword = '';
$dbName = 'form_c';

$connection = new mysqli($dbHost, $dbUsername, $dbPassoword, $dbName);
/*
if($connection -> connect_errno)
{
    echo "Connection Error!";
}
else
{
    echo "Connected!";
}
*/
?>