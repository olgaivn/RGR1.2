<html>
	<head> <meta charset="UTF-8"></head>
	<body>
	<form  method="GET">
	<img src="http://www-formula.ru/images/geometry/triangle%20bisector1.png"><p>
	Длина стороны а = <input type ="text" name="arg1" value="<?php 
		if (isset ($_GET['arg1'])) {
			echo $_GET['arg1'];
		}
	        ?>">
	Длина стороны b = <input type ="text" name="arg2" value="<?php 
		if (isset ($_GET['arg2'])) {
			echo $_GET['arg2'];
		}
			?>">
	Длина стороны с = <input type ="text" name="arg3" value="<?php 
		if (isset ($_GET['arg3'])) {
			echo $_GET['arg3'];
		}
			?>">
	<input type ="submit" value="Рассчитать" >
	</form>
	<?php
		function calc($arg1,$arg2,$arg3) {
			return sqrt (intval(intval($arg1)*intval($arg2)*intval($arg1+$arg2+$arg3)*intval($arg1+$arg2-$arg3)))/intval($arg1+$arg2);
		}
	?>

		<?php 
		
		if (isset($_GET['arg1'])&& isset($_GET['arg2'])&& isset($_GET['arg3'])) {
			$arg1=$_GET['arg1'];
			$arg2=$_GET['arg2'];
			$arg3=$_GET['arg3'];
			if (!is_numeric($arg1) || !is_numeric($arg2)|| !is_numeric($arg3)){
				echo  "Введено не числовое значение ";
			} elseif ($arg1<0 || $arg2<0 || $arg3<0){
				echo  "Введено отрицательное значение ";
			} else {
				echo	number_format(calc($_GET['arg1'],$_GET['arg2'],$_GET['arg3']), 2, ',', ' ');
			}	
		}
		?>
	</body>	
</html>	
