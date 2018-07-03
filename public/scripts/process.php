<?php
header('Content-Type: text/html; charset=UTF-8');
if ( isset($_POST['registry']) ){ 

	$registry = $_POST['registry'];
	require 'connection.inc';
	$created_at = date("Y-m-d H:i:s");
	$updated_at = $created_at;

	if($registry == 'dato'){

		$user = $_POST['user'];
		$name = ucwords($_POST['name']);
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$municipality = $_POST['municipality'];
		$tell = $_POST['tell'];
		$module = $_POST['module'];
		$referred = $_POST['referred'];
		$place = $_POST['place'];

		if($tell == 'Referido'){
			$place = '';
			$module = '';
		}elseif ($tell == 'Sucursal') {
			$referred = '';
			$module = '';
		}elseif ($tell == 'Modulo') {
			$place = '';
			$referred = '';
		}else{
			$module = '';
			$referred = '';
			$place = '';
		}
		// process day
		$dayOrg = utf8_encode($_POST['day']); 
		$dayNew = str_replace('â', '', $dayOrg);
		$dayEnd = str_replace('/', '-',$dayNew);
		// process day
	
		if($user != '' && $name != '' && $phone != ''){
			$rphone = mysql_query("SELECT phone FROM data WHERE phone='$phone'");
			$checkphone = mysql_num_rows($rphone);
			if($checkphone == 0){
				mysql_query("INSERT INTO data(employee_id,full_name,phone,email,municipality,tell,module,day,referred,branch_office,created_at,updated_at) VALUES('$user','$name','$phone','$email','$municipality','$tell','$module','$dayEnd','$referred','$place','$created_at','$updated_at')");
				mysql_close();	

				echo '<p class="exito">Se ha efectuado el registro <br /> de forma exitosa!</p>';
				echo '<a class="link" href="register.php">Volver</a>';

			}else{ 

				echo '<p class="error">Hubo un error al guardar los datos, ya que el número telefónico ya se encuentra registrado.</p>';
			}
		}
	}elseif ($registry == 'cita') {

		$user = $_POST['user'];
		$name = ucwords($_POST['name']);
		// process day
		$dayOrg = utf8_encode($_POST['day']); 
		$dayNew = str_replace('â', '', $dayOrg);
		$dayEnd = str_replace('/', '-',$dayNew);
		// process day
		$hour = $_POST['hour'];
		$place = $_POST['place'];

		if($user != '' && $name != ''){

			mysql_query("INSERT INTO appointments (employee_id,full_name,day,hour,place,created_at,updated_at) VALUES('$user','$name','$dayEnd','$hour','$place','$created_at','$updated_at')");			
			mysql_close();
		}

	}elseif ($registry == 'matricula') {

		$user = $_POST['user'];
		$name = ucwords($_POST['name']);
		$hour = $_POST['hour'];
		$course = $_POST['course'];
		$pay = $_POST['pay'];
		$folio = $_POST['folio'];

		if($user != '' && $name != ''){
			mysql_query("INSERT INTO registrations (employee_id,full_name,hour,course,pay,folio,created_at,updated_at) VALUES('$user','$name','$hour','$course','$pay','$folio','$created_at','$updated_at')");
			mysql_close();
		}

	}

}
?>