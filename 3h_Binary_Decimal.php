Binary_Decimal<br><br>

<?php
	if(isset($_POST["sub"]) && ($_POST["sub"]=="run") )
	{
	    
		
		$num=$_POST["num"];
		if(isset($_POST["num"]) && ($_POST["num"]!="") )
		{ 
		  $ak=$num;
		  
		  $i=1;
		  $s=0;
		  
		  while(floor($num)!=0)
		  { $r=($num%10);
		    $s=$s+($r*$i);
			$num=$num/10;
			$i=$i*2;
		  }
		  echo $s;	
		}
		else
		{ echo "Invallid input";}
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Binary_Decimal</title>
</head>

<body>
<form action="Binary_Decimal.php" method="post">
Enter the number :
<input type="text" name="num" />
<input type="submit" name="sub" value="run" />

</form>


</body>
</html>
