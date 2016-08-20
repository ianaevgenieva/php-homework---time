<?php

	$year = isset($_POST['years'])? $_POST['years'] : '';
	$month = isset($_POST['month'])? $_POST['month'] : '';
	$date =isset($_POST['date'])? $_POST['date'] : '';
	$hour = isset($_POST['hour'])? $_POST['hour'] : '';
	$min = isset($_POST['min'])? $_POST['min'] : '';
	$sec = isset($_POST['sec'])? $_POST['sec'] : '';
	
	$year1 = isset($_POST['year1'])? $_POST['year1'] : '';
	$month1 = isset($_POST['month1'])? $_POST['month1'] : '';
	$date1 = isset($_POST['date1'])? $_POST['date1'] : '';
	$hour1 = isset($_POST['hour1'])? $_POST['hour1'] : '';
	$min1 = isset($_POST['min1'])? $_POST['min1'] : '';
	$sec1 = isset($_POST['sec1'])? $_POST['sec1'] : '';
	
	$formatNew = isset($_POST['format'])? $_POST['format'] : '';

$stp = mktime($hour+$hour1,$min+$min1,$sec+$sec1,$month+$month1,$date+$date1,$year+$year1);
$newDate = date($formatNew,$stp);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>

</head>
<body>
<form  method="post">
<label>years:</label><br>
<input type="text" name="years" ><br>
<label>Month:</label><br>
<input type="text" name="month" ><br>
<label>Date:</label><br>
<input type=text name="date" ><br>
<label>Secunds:</label><br>
<input type=text name="sec" ><br>
<label>Minutes:</label><br>
<input type=text name="min" ><br>
<label>hours:</label><br>
<input type="text" name="hour" ><br>
<label>years+:</label><br>
<input type="text" name="years1" ><br>
<label>Month+:</label><br>
<input type="text" name="month1" ><br>
<label>Date+:</label><br>
<input type=text name="date1" ><br>
<label>Secunds+:</label><br>

<input type=text name="sec1" ><br>
<label>Minutes+:</label><br>
<input type=text name="min1" ><br>
<label>hour+:</label><br>
<input type="text" name="hour1" ><br>
<label>Enter format:</label><br>
<input type=text name="format" ><br>
<input type="submit" value=Click id="btn">
</form>
<input name=result value = <?php  echo $newDate;?>>
</body>
</html>