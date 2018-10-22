<?php

echo '<b>Scritto da t.me/Matxk</b>';

																		t.me/DevelopingLab;

#Il bot DEVE ESSERE ADMIN del canale per far sì che funzioni;

$bottoken = 'API'; //Inserire il token del vostro bot
$usernamecanale = '@CANALE' //Sotituire "CANALE" con l' username del vostro canale (Mantenere la @)
$checkch = file_get_contents("https://api.telegram.org/bot".$bottoken."/getChatMember?chat_id=$usernamecanale&user_id=$userID"); //Identifica chi è nel canale e chi no

//Comando Start per chi non è unito al canale
if($msg == '/start' and strpos($checkch, '"status":"left"') == true) {
	$menu[] = [['text' => 'Canale', 'url' => 't.me/Canale'],];
	
		sm($chatID, "<i>Devi essere unito a</i><b> NOMECANALE</b> <i>per utilizzarmi!</i>", $menu, 'HTML');
}

//Comando Start per chi è unito al canale
if($msg == '/start' and strpos($checkch, '"status":"left"') == false) {
		sm($chatID, "<i>Bot avviato con successo!</i>");
}