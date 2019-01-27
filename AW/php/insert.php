<?php

    $con=@mysqli_connect('localhost', 'root', '', 'futbol');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['nom'])){
			$errors[] = "Equipos vacío";
		} else if (empty($_POST['localitat'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['web'])){
			$errors[] = "Localidad vacía";
		} else if (empty($_POST['escut'])){
			$errors[] = "Escudo vacío";
		}   else if (
			!empty($_POST['nom']) && 
			!empty($_POST['localitat']) &&
			!empty($_POST['web']) &&
			!empty($_POST['escut'])
		)

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nom=mysqli_real_escape_string($con,(strip_tags($_POST["nom"],ENT_QUOTES)));
		$localitat=mysqli_real_escape_string($con,(strip_tags($_POST["localitat"],ENT_QUOTES)));
		$web=mysqli_real_escape_string($con,(strip_tags($_POST["web"],ENT_QUOTES)));
		$escut=mysqli_real_escape_string($con,(strip_tags($_POST["escut"],ENT_QUOTES)));
		
		$sql="INSERT INTO equips (nom, localitat, web, escut) VALUES ('".$nom."','".$localitat."','".$web."', '".$escut."'	)";
		$query_update = mysqli_query($con,$sql);
		if ($query_update){
			$messages[] = "Los datos han sido guardados satisfactoriamente.";
             header( "refresh:1; url=index.php");

		} else{
			$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>