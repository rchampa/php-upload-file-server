<?php
	//header('Content-Type: text/plain; charset=utf-8');
	header('Content-Type: application/json; charset=utf-8');

	print_r(json_decode('{"t":"\u00ed"}'));

	$lista = json_decode('{"t":"\u00ed"}');
	echo $lista->t;
?>