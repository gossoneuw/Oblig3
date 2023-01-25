<?php
$conn = mysqli_connect('localhost', 'root', '', 'comment section');

if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}

$meldinger = mysqli_connect('localhost', 'root', '', 'meldinger');

if (!$meldinger) {
    die("connection failed: ".mysqli_connect_error());
}
?>