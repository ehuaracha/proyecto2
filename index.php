<!DOCTYPE html>
<html>
<head>
<title>Area de un Triangulo</title>
</head>	
<body>
	<form name="formularioDatos" method="POST" action="#">
 		<p> Area de un Triangulo</p>
 		<p> Datos del Triangulo</p>
		<br/>
		 Ingrese la base:
		 <input type="text" name="txtBase" value="">
		 <br/> <br/>
		 Ingrese la altura:
		 <input type="text" name="txtAltura" value="">
		 <br/> <br/>
		 <input value="Calcular" type="submit" name="btnCalcular"/>
		 <br/> <br/>
   </form>
   <?php   
   		if (isset($_POST['btnCalcular']))
   		{
   			if (empty($_POST['txtBase'])) {
			  echo "Ingrese la base del triangulo"; 
			}elseif (empty($_POST['txtAltura'])) {
				echo "Ingrese la altura del triangulo"; 
			}
			else{
				$Base = $_POST['txtBase'];
				$Altura=$_POST["txtAltura"]; 
				$area=($Base*$Altura)/2;
				echo "<br/> &nbsp; El area del triangulo es: ".$area;
			}
		}
	?>
</body>
</html>
