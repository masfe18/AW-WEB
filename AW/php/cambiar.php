<?php  
    $con=@mysqli_connect('localhost', 'root', '', 'futbol');

    $nom= $_POST['nom'];
    $codiequip = $_POST['codiequip'];

		$nom=mysqli_real_escape_string($con,(strip_tags($_POST["nom"],ENT_QUOTES)));
		$codiequip=intval($_POST['codiequip']);
		$sql="UPDATE futbol SET codiequip='".$codiequip."'	WHERE nom='".$nom."'";
		$query_update = mysqli_query($con,$sql);

            if (messages) {
                header('Location: index.php');
			} else {
				echo "Error";
			}
?>