<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Calculadora</title>
	</head>
	<body>
		<b>CALCULADORA</b>
		<br><br>
		<form action=# method=POST>
			Digite o 1º valor: <input type=text name=num1 required> <br><br>
			Digite o 2º valor: <input type=text name=num2 required> <br><br>
			Clique na operação desejada: 
			<input type=submit name=button value="+">
			<input type=submit name=button value="-">
			<input type=submit name=button value="x">
			<input type=submit name=button value="/">
			<br><br>
			<i>* Valores decimais devem ser escritos com ponto.</i>
		</form>
	</body>
</html>

<?php
	if(@$_REQUEST['button'])
	{
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$sign=$_POST['button'];
		if ($sign=='+')
			echo $num1 ." + ". $num2 ." = ". ($num1+$num2);
		else if ($sign=='-')
			echo $num1 ." - ". $num2 ." = ". ($num1-$num2);
		else if ($sign=='x')
			echo $num1 ." x ". $num2 ." = ". ($num1*$num2);
		else if ($sign=='/')
			echo $num1 ." / ". $num2 ." = ". ($num1/$num2);
	}
?>