
<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
 
<body>
 
<form action="demo.php" method="POST"> Name:
<input type="text" name="firstname"> <br> Surname:
<input type="text" name="lastname"> <br> Date of Birth:
<input type="date" name="birthdate"> 
<input type="hidden" name="submit" value="1" />
<input type="submit" value="Submit">

</form>

  <?php
    $date = date('d-m-y H:i:s');
	echo $date;
   ?>
 
</body>
</html>