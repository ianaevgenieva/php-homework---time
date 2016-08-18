<?php
  $err = [];
  $isDate = null;
  $date = isset($_POST["date"])? $_POST["date"]: "";
  $month = isset ($_POST["month"])?$_POST["month"]: "";
  $years  = isset ($_POST["years"]) ? $_POST["years"]: "";
  $isDate = checkdate((int)$month, (int)$date,(int) $years);
  if ($isDate){
  	$err = [];
  } else {
  	$err []= "nevalid date";
  }
 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>

</head>
<body>
<form  method="post">
	<label>Date:</label><br>
	<input type="text" name="date" ><br>
	<label>Month:</label><br>
	<input type="text" name="month" ><br>
	<label>Years:</label><br>
	<input type=text name="years" ><br>
	<input type="submit" value=Click id="btn">
</form>
 <?php  for ($i = 0; $i<count($err);$i++):?>
 <p><?php  echo "$err[$i]";?> </p>
 <?php  endfor;?>
</body>
</html>