<?php session_start(); ?>

<?php

if(!isset($_SESSION['name']))
	include 'head1.php';
else
	include 'head2.php';
?>