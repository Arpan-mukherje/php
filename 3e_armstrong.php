Armstrong Number<br><br>
<?php
	if(isset($_POST["sub"]) && ($_POST["sub"]=="run") )
	{
	
		$num=$_POST["num"];
		if(isset($_POST["num"]) && ($_POST["num"]!="") )
		{
			
					$s=0;
					$t=$num;
					while(floor($num)!=0)
					{
					  $r=$num%10;
					  $s=$s+($r*$r*$r);
					  $num=$num/10;
					 }
					 
				if($t==$s)
				{
				  echo $t." is armstrong number";
				 }
				 else
				 {
				  echo $t." is not armstrong number";
				  }
					
			}
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>armstrong number</title>
</head>

<body>

<form action="armstrong.php" method="post" name="frm">
Enter the number :
<input type="text" name="num" />
<input type="submit" name="sub" value="run" />
</form>

</body>
</html>


