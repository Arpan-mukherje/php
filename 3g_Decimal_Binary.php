Decimal_Binary<br><br>

<?php
	if(isset($_POST["sub"]) && ($_POST["sub"]=="run") )
	{
	    
		$arr=array();
		$num=$_POST["num"];
		if(isset($_POST["num"]) && ($_POST["num"]!="") )
		{ $t=$num;
		  
		  
		  $i=0;
		  
		  while(floor($num)!=0)
		  { $s=($num%2);
		    $arr[$i]=$s;
			$num=$num/2;
			$i=$i+1;
		  }
		  $arr=array_reverse($arr);
		  echo "Binary of ".$t." is :";
		  for($j=0;$j<=count($arr)-1;$j++)
		  { $p=$arr[$j];
		    echo $p;
		  }			
		}
		else
		{ echo "Invallid input";}
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Decimal_Binary</title>
</head>

<body>
<form action="Decimal_Binary.php" method="post" name="frm">
Enter the number :
<input type="text" name="num" />
<input type="submit" name="sub" value="run" />

</form>


</body>
</html>
