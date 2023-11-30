Factorial<br><br>
<?php
	if(isset($_POST["sub"]) && ($_POST["sub"]=="run") ){
	
		$num=$_POST["num"];
		if(isset($_POST["num"]) && ($_POST["num"]!="") ){
			
			$f=1;
					for($i=1;$i<=$num;$i++)
					{
					  $f=$f*$i;
					}
					echo "factorial of ".$num." is ".$f;
					
			}
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Factorial</title>
</head>

<body>
<form action="factorial.php" method="post">
Enter the number :
<input type="text" name="num" />
<input type="submit" name="sub" value="run" />

</form>


</body>
</html>


