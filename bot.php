<?php
// Simple Telegram Bot Test

$botToken = "8343483650:AAE4TAKAM5BG6ovBxXlofpdT9NPlXO5r2Jw";
$website = "https://api.telegram.org/bot".$botToken;

// Get updates
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

// Simple reply
if ($message == "/start") {
    $reply = "✅ Bot is running on Railway!";
} else {
    $reply = "You said: $message";
}

file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=".urlencode($reply));
