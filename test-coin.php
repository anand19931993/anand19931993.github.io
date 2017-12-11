<?php require_once ("block_io.php");
$apiKey = "59f5-6bec-6514-6287";
$version = 2; // API version
$pin = "9967548041";
$block_io = new BlockIo($apiKey, $pin, $version);
$block_io->withdraw_from_labels(array('amounts' => '0.000012', 'from_labels' => 'cointotoken', 'to_labels' => 'anandiyengar0@gmail.com918317b57931b6b7a7d29490fe5ec9f9', 'pin' => '9967548041'));

?>