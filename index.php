<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
	<script languaje="javascript" type="text/javascript">
		function CalcularPromedio(){
			var nrocalif = document.getElementsByName('idcalif[]');
			var idpeso = document.getElementsByName('idpeso[]');
			//Bucle sobre los Estudiantes
			var idestudiante = document.getElementsByName('idname[]');
			for (var a=0; a<idestudiante.length; a++){
				var idvalue = idestudiante[a].value;
				//Calculo del Promedio
				var promedio=0;
				for (var i=1; i<=nrocalif.length; i++) {
					var nota = document.form1.elements[idvalue+'['+i+']'].value;
					//El peso es expresado en porcentaje = 100%
					var peso = idpeso[i-1].value/100;
					promedio = promedio + (nota * peso);
				}
				//Visualizar Promedio con tres decimales
				i = i++;
				document.form1.elements[idvalue+'['+i+']'].value=promedio.toFixed(3);
			}
		}
	</script>
</head>
<body>

<?php
	include_once('mysqldatabase.php');
	include_once('mysqlresultset.php');

	// get the MySqlDatabase instance
	$db = MySqlDatabase::getInstance();
	try {
    	$db->connect('localhost', 'username', 'password', 'database_name');
	}
	catch (Exception $e) {
    	die($e->getMessage());
	}

	//Visualizar Calificacion
	echo "<form name=form1 method=post action=guardar.php >";
	echo "<table border=1>";
	echo "	<tr>";
	echo "		<td><b>Nombre</b></td>";
	$query = "SELECT * FROM Calificacion";
	foreach ($db->iterate($query) as $row) {
		$nrocalif++;
	echo "		<input name=idcalif[] value=".$row->idcalificacion." type=hidden>";
	echo "		<td><input name=idpeso[] value=".$row->peso." type=hidden><b>".$row->nombre_calificacion."</b></td>";
	}
	echo "		<td><b>Promedio</b></td>";
	echo "  </tr>";	
	//Visualizar Estudiantes
	$query = "SELECT * FROM Estudiante";
	foreach ($db->iterate($query) as $row) {
		$a++;
	echo "	<tr>";
	echo "		<td><input name=idname[] value=".$row->coduniv." type=hidden>".$row->nombre_completo."</td>";
	for ($i=1; $i<=$nrocalif; $i++) {
	echo "		<td><input name=".$row->coduniv."[".$i."] type=text></td>";
	}
	//Cuadros de texto para el Promedio
	echo "		<td><input name=".$row->coduniv."[".$i++."] type=text readonly=true></td>";
	echo "	</tr>";
	}
	echo "</table>";
?>
	<button name="calcular" type="button" onclick="CalcularPromedio();">Calcular Promedios</button>
	<input type="submit" value="Guardar Notas" />
	</form>

	<br />
	<h1>Regitros Ingresados</h1>
<?php
	$query = "SELECT ES.nombre_completo, PR.promedio ";
	$query = $query . "FROM Estudiante ES, Promedios PR ";
	$query = $query . "WHERE ES.coduniv = PR.coduniv";
	echo "<table border='1' width='25%''>";
	echo "	<tr>";
	echo "		<td><b>Nombres</b></td>";
	echo "		<td><b>Promedio</b></td>";
	echo "	</tr>";
	foreach ($db->iterate($query) as $row) {
	echo "	<tr>";
	echo "		<td>".$row->nombre_completo."</td>";
	echo "		<td>".$row->promedio."</td>";
	echo "	</tr>";
	}
	echo "</table>";
?>
</body>
</html>