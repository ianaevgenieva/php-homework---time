<?php
 //thing
$patternThing = "/^[a-z]*[thing]$/";
$word = "thingthing";
$isTrue  = preg_match($patternThing, $word);
if($isTrue){
	echo "true".PHP_EOL;
} else {
	echo "false".PHP_EOL;
}
//is
$patternIs = "/^[a-zA-z]*[is]+[a-zA-Z]*$/";
$word1 = "fsfsis";
 if ((preg_match($patternIs,$word1))) {
 	echo "true".PHP_EOL;
 } else {
 	echo "false".PHP_EOL;
 }
 //valid word
 $validWord = "/[a-zA-Z]+/";
 $words = "fsfss";
 if (preg_match ($validWord,$words)){
 	 echo "true".PHP_EOL;
 } else {
 	 echo "false".PHP_EOL;
 }
 //valid number
 $validTel = "/08[7-9]{1}[1-9]{1}\d{3}\d{3}/";
 $tel = "0899899923";
 if (preg_match($validTel,$tel)){
 	 echo "true".PHP_EOL;
 } else {
 	echo  "false".PHP_EOL;
 }
 //valid css selector
 $patternSelector = "/(.|#)*([a-z]*|[A-Z])+/";
 $selec = '.divRed';
 if (preg_match($patternSelector, $selec)) {
 	echo "true".PHP_EOL;
 } else {
 	echo "false".PHP_EOL;
 }
 //valid ivancho
 $ivan = "ivan e  dobyr";
 $selectIvan = "/\bivan\b/";
 if (preg_match($selectIvan, $ivan)) {
 	echo "true".PHP_EOL;
 }  else {
 	echo "false".PHP_EOL;
 }
 //valid tag
  $tag = "<htnl name =pencho>";
  $patternTag = "/<[a-z]+[\s]*[a-z]*=*[a-z]*>/";
  if (preg_match($patternTag,$tag)){
  	echo "true..".PHP_EOL;
  } else {
  	 echo "false".PHP_EOL;
  }
  $patternCT = "/CT[0-9]{4}[A-Z]{2}/";
  $ctReg = "CT2234KN";
  if(preg_match($patternCT,$ctReg)) {
  	  echo "true".PHP_EOL;
  } else {
  	 echo "false".PHP_EOL;
  }
  $gmail = "'/([a-z])+(\_*|\-*)([a-z]*)+\@gmail\.com/i";
  $gmailMy="iana_evgenieva@gmail.com";
  if (preg_match($gmail,$gmailMy)){
  	 echo "true".PHP_EOL;
  } else {
  	echo "false".PHP_EOL;
  }