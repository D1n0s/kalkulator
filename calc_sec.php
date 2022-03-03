
<?php

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$raty = $_REQUEST ['raty'];
$proc = $_REQUEST ['oprocentowanie'];


if ( ! (isset($kwota) && isset($raty) && isset($proc))) {

	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Kwota nie możę być pusta ! ';
}else if ( $kwota < 0) {
	$messages [] = 'Kwota nie możę być ujemna ! ';
}else if ( $kwota > 100000) {
	$messages [] = 'Kwota nie możę być taka duża ! ';
}
if ( $raty == "") {
	$messages [] = 'Raty nie mogą być puste ! ';
}
if ( $proc == "") {
	$messages [] = 'Oprocentowanie nie może być puste ! ';
}else if ( $proc <0) {
	$messages [] = 'Oprocentowanie nie może być ujemne ! ';
}else if ( $proc > 15) {
	$messages [] = 'Oprocentowanie jest za dużę :( niestety ! ';
}
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $raty )) {
		$messages [] = 'Raty nie są liczbą całkowitą !';
	}	
  if (! is_numeric( $proc )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	





if (empty ( $messages )) { // gdy brak błędów
	$procend = $proc / 100;
	$prowizja = $kwota * $procend;
  $kwotaend = $kwota +  $prowizja;
  $result = $kwotaend / $raty;


	}



include 'index.php';