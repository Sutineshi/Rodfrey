$token = "7769163596:AAEozTieX1YiP_jasM5vMTlsRpAA1Ejj5Gw";
$chat_id = 508352253;

$textMessage = "Тестовое сообщение";
$textMessage = urlencode($textMessage);


$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;
