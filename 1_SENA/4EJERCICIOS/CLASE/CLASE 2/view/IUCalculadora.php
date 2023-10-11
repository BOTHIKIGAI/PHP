<?php
require_once '../model/Calculadora.php';
require_once '../model/calculadoraExt.php';

if (isset($_REQUEST["procesar"])){
	$n1 = intval($_REQUEST["num1"]);
	$n2 = intval($_REQUEST["num2"]);
	$operador = $_REQUEST["oper"];

	$resultado = false;
	$rpta = 0;
	//$calc = new Calculadora("CASIO", "Basico");
	$calc = new calculadoraExt("CASIO", "Basico");

	switch($operador){
		case "+": $rpta = $calc->sumar($n1, $n2);
		$resultado = true;
		break;
		case "-": $rpta = $calc->restar($n1, $n2);
		$resultado = true;
		break;
		case "*": $rpta = $calc->multiplicar($n1, $n2);
		$resultado = true;
		break;
		case "/": $rpta = $calc->dividir($n1, $n2);
		$resultado = true;
		break;
		case "^": $rpta = $calc->potencia($n1, $n2);
		$resultado = true;
		break;
	}
}



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../css/estiloCalc.css"/>
		<title>Calculadora Basica</title>
	</head>
	<body>
		<h1>Calculadora Basica</h1>
		<form name="form1" method="post" action="IUCalculadora.php">
			<table width="286" border="1">
				<tr>
					<td width="74" align="center">Operando 1</td>
					<td width="120" align="center">Operador</td>
					<td width="70" align="center">Operando 2</td>
				</tr>
				<tr>
					<td align="center"><input name="num1" type="text" class="fieldEdit" id="num1" size="5" maxlength="5"></td>
					<td align="center"><select name="oper" id="oper">
							<option value="+">Sumar +</option>
							<option value="-">Restar -</option>
							<option value="*">Multiplicar *</option>
							<option value="/">Dividir /</option>
							<option value="^">Potencia ^</option>
					</select></td>
					<td align="center"><input name="num2" type="text" class="fieldEdit" id="num2" size="5" maxlength="5"></td>
				</tr>
			</table>
			<p>
				<input name="procesar" type="submit" class="button" id="procesar" value="Procesar">
			</p>
		</form>
		

		<?php if($resultado) { ?>
			<div id="resultado">
				<table width = "300" border = "1px">
					<th colspan="5" align="center"><?php echo "Resultado Calculadora Marca: " .$calc->getMarca()?></th>
					<tr>
						<td><?php echo $n1 ?></td>
						<td><?php echo $operador ?></td>
						<td><?php echo $n2 ?></td>
						<td>=</td>
						<td><?php echo $rpta ?></td>
					</tr>
				</table>
			</div>
		<?php } ?>


	</body>
</html>