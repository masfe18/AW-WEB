<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>Equipos de futbol</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Equipos de futbol</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="usuarios.php">Mostrar1</a></li>
			  <li><a href="mostrar2.php">Mostrar2</a></li>
			  <li><a href="delete.php">Eliminar</a></li>
			  <li><a href="modificar.php">Modificar</a></li>
			  <li><a href="formulario.php">Insertar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Equipos de futbol</h1>
        <p>Los mejores equipos del mundo</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div>
<?php
			$servidor = "localhost";
	        $usuario = "root";
	        $password = "";
	        $db = "futbol";
            
            $conn = new mysqli($servidor, $usuario, $password, $db);

			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT nom, localitat, web, escut FROM equips ORDER BY nom";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					echo "<table class=table table-bordered";
					echo "<tr>";
					echo "<th>Nombre del equipo</th> <th>Localidad</th> <th>Página Web</th> <th>Escudo</th>";
					echo "</tr>";
					while($rows = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $rows['nom'] . "</td><td>" . $rows['localitat'] . "</td><td>" . "<a href=\"" . $rows['web'] . "\">" . "Pagina Web" . "</a>" . "</td>";
                        if ($rows['escut'] == "vlc") {
                            $escut = "../img/1.PNG";
                        }
                         if ($rows['escut'] == "svl") {
                            $escut = "../img/2.PNG";
                        }
                        if ($rows['escut'] == "rls") {
                            $escut = "../img/3.PNG";
                        }
                        if ($rows['escut'] == "mdr") {
                            $escut = "../img/4.PNG";
                        }
                        if ($rows['escut'] == "lvt") {
                            $escut = "../img/5.PNG";
                        }
                        if ($rows['escut'] == "gtc") {
                            $escut = "../img/6.PNG";
                        }
                        if ($rows['escut'] == "dpa") {
                            $escut = "../img/7.PNG";
                        }
                        if ($rows['escut'] == "bets") {
                            $escut = "../img/8.PNG";
                        }
                        if ($rows['escut'] == "bcn") {
                            $escut = "../img/9.PNG";
                        }
                        if ($rows['escut'] == "atm") {
                            $escut = "../img/10.PNG";
                        }
                        echo "<td><img src=../img/". $escut . "></td>";
                        }
						echo "</tr>";
					echo "</table>";
				} else {
					echo "No hay registros disponibles";
				}
				$conn->close();
			}
		?>
        </div>
 
      </div>

      <hr>

      <footer>
        <p>&copy; 2019 Pere Masferrer</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

