<?php
date_default_timezone_set('Asia/Yekaterinburg'); //Your time zone
$audio = ''; //Your audio id 1 (Example '154368663_456241321')
$audio_id = explode('_', $audio);
$owner_id = ''; //Your id (Example '154368663')
$access_token = ''; //Your access token (Example '8f081bed03b8c72b2eu53d600600ee8f9d4173ce6f24o5447a386e6a81fa9163f9e44ce')
$artist = 'GUSSI.WEBSITE';
$title = date("F d - H:i").' — GIPERFAST.TK';

$edit = curl('https://api.vk.com/method/audio.edit?access_token='.$access_token.'&owner_id='.$owner_id.'&audio_id='.$audio_id[1].'&artist='.$artist.'&title='.urlencode($title).'&genre_id=18&no_search=0&v=5.122');

$statusSet = curl('https://api.vk.com/method/status.set?audio='.urlencode($audio).'&access_token='.$access_token.'&v=5.122');

print_r($edit.'</br>');
print_r($statusSet.'</br>');


function curl( $url ) {
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	$response = curl_exec( $ch );
	curl_close( $ch );
	return $response;
}
?>
