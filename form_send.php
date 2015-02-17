<?php

$raw = $_POST['raw'];
$ipn = $_POST['ipn'];
$variables = array();

while (strstr($raw, '=')) {
	$variable = strstr($raw, '=', $before_needle = TRUE);
	$raw = substr(strstr($raw, '='),1);
	if (strstr($raw, '&')) {
		$value = strstr($raw, '&', $before_needle = TRUE);
		$raw = substr(strstr($raw, '&'),1);
	}
	else {
		$value = substr($raw, 1);
		$raw = '';
	}
	print $variable.": ";
	print $value."<br>";
	$variables[$variable] = $value;
}

echo '<br><form target="_new" method="post" action="'.$ipn.'">';
foreach ($variables as $variable => $value) {
	echo '<input type="hidden" name="'.$variable.'" value="'.$value.'"/>';
}
echo '<input type="submit" value="send to IPN listener"/></form>';

?>