<?php
$update = json_decode(file_get_contents("php://input"), true);

$chat_id = $update["message"]["chat"]["id"] ?? "";
$msg = $update["message"]["text"] ?? "";

if ($msg) {
    file_get_contents("https://api.telegram.org/bot8343483650:AAE4TAKAM5BG6ovBxXlofpdT9NPlXO5r2Jw/sendMessage?chat_id=$chat_id&text=👉 $msg 👈");
}
?>
