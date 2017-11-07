<?php
// "HTTP/1.0 404 Not Found"
function status_header($code = 200) {
	$messages = [
		200 => "OK",
		302 => "Moved temporaily"

	];
	header ("HTTP/1.0 ".$code. " ".$messages[$code]);

}
echo status_header(302);

// [header => värde]
function headers(array $headers = []) {
    //header ("Connection: keep-alive");
    foreach ($headers as $header => $value) {

	}
}

headers([
    "Connection" => "Keep-alive",
    "Connection" => "Connection-fail",


])

function redirect($url, $code = 302) {
    header ("Locaton: ");

        $url =>
        $code =>

}