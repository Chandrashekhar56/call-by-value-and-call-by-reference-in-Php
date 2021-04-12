<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" action="call_by_value_and_reference.php">
			Enter number[call by value]
			<input type="text" name="x" />
			<br>
			<br>
			Enter number[call by reference]
			<input type="text" name="y" />
			<br>
			<br>
			<input type="submit" value="submit">
			<input type="reset" value="reset">
		</form>
</body>
</html>
<?php
		if((isset($_POST['x']))&&(isset($_POST['y'])))
		{
			$a=$_POST['x'];
			$b=$_POST['y'];

			echo $a."&nbsp &nbsp".$b."<br>";
			function f($a,&$b)
			{
				$a=10;
				$b=20;
				echo $a."&nbsp &nbsp".$b."<br>";
			}
			f($a,$b);
			echo $a."&nbsp &nbsp".$b."<br>";
		}

?>