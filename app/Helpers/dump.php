<?

function pr ($value, $name = null) {
	echo '<pre>';
	if ($name !== null) {
		echo $name.' = ';
	}
	print_r($value);
	echo '</pre>';
}

function vd ($value, $name = null) {
	echo '<pre>';
	if ($name !== null) {
		echo $name.' = ';
	}
	var_dump($value);
	echo '</pre>';
}

?>