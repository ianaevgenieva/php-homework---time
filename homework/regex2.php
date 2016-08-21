<?php

//sentence
$patternSentence = "/([A-Z]{1}[a-z]*\s)*([a-z]*\s)*([a-z]*\s*)*([.|\!|\?])/";
$sentence = "Az obicham shokolad.";
if (preg_match ($patternSentence,$sentence)) {
	echo "true pattern sentense".PHP_EOL;
} else {
	echo "false pattern sentense".PHP_EOL;
}

//abv
$patternAbvPost = "/([a-z]+)(_|.)([a-z])*@(abv).(bg)/";
$postAbv = "coneva_adad@abv.bg";
if (preg_match ($patternAbvPost,$postAbv)) {
	echo "true pattern post abv".PHP_EOL;
} else {
	echo "false abv".PHP_EOL;
}

//PHP-statement
$patternStatementPhp = "/(while|if)\s*\((!){0,1}[a-z]+(>|<|==|&&|!|\|\|)*[a-z]*\)\s\{/";
$phpStatement = "while (a&&b) {";
if (preg_match($patternStatementPhp, $phpStatement)) {
	echo "true php statement".PHP_EOL;
} else{
	echo "false php statement".PHP_EOL;
}

//while 
$whilePattern = "/while\s*\((!){0,1}[a-z]+\s*(>|<|==|&&|\|\||!=){0,1}\s*[a-z]*\)\s\{/";
$whiles = "while (true) {";
if (preg_match($whilePattern,$whiles)){
	echo "true while syntax".PHP_EOL;
} else {
	echo "false while syntax".PHP_EOL;
}
		
//NUMBER 1000-19000
$numbersPattern = "/(([1-9]{1}[0-8]{0,1})([0-9]{3}))/";
$number ="12457";
if (preg_match($numbersPattern,$number)){
	echo "true number".PHP_EOL;
} else {
	echo "false number".PHP_EOL;
}
		
