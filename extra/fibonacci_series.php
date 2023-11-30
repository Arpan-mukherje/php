<?php
$num=$_REQUEST['num'];
//echo $num;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fibonacci Series</title>
</head>

<body>
<div style="border:2px solid black; width:50%; margin:auto" align="center">
<form action="#" type="post">
<h3>Enter The Range Here:</h3>
<input type="number" name="num" placeholder="Enter a value"/>
<input type="submit" value="Enter"/>
</form>

<?php
if($num!=''){
echo "<h2>Fibonacci Series</h2>";
$n1=0;
$n2=1;
$n3;?>
<table border='1'>
<tr>
<td>
<?php echo $n1;?>
</td>
<td>
<?php echo $n2;?>
</td>
<?php for($i=2;$i<=$num;++$i){
$n3=$n1+$n2;?>
<td>
<?php echo $n3;?>
</td>
<?php $n1=$n2;
$n2=$n3;
}?>
</tr>
</table>
<?php }?> 
</div>
</body>
</html>
