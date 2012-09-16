

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

	//Guardar Notas y Promedios
	$nrocalif = count($_POST["idcalif"]);
	foreach ($_POST["idname"] as $key => $value) {
		//Estudiante
		$idname = $_POST["idname"][$key];
		//El promedio se almacena sin decimales
		$promedio = number_format($_POST[$idname][$nrocalif+1]);
		//Guardar solo si el Promedio es diferente de cero
		if ($promedio<>0) {
			for ($i=0; $i<$nrocalif; $i++) {
				//Nota
				$nota = $_POST[$idname][$i+1];
				$idcalif = $_POST["idcalif"][$i];
				//Guardar Nota
				$query = "INSERT INTO Notas (coduniv, idcalificacion, nota) VALUES ('".$idname."',".$idcalif.",".$nota.")";
				$last_id = $db->insert($query);
			}
			//Guardar Promedio
			$query = "INSERT INTO Promedios (coduniv, promedio) VALUES ('".$idname."',".$promedio.")";
			$last_id = $db->insert($query);
		}
	}
	header("Location: index.php");
?>