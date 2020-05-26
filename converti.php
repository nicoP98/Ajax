<html>
<head>
<title>Convertitore basi</title>
</head>
<body>
<h1>Convertitore basi</h1>
<hr>
<?php
 $bp=$_GET["base"]; //base di partenza
 $numero=$_GET["numero"];//numero da convertire
 $bd=Array(2,8,16);//vettore basi di destinazione
 if($bp==2) $bd=Array(10,8,16);
 if($bp==8) $bd=Array(10,2,16);
 if($bp==16) $bd=Array(10,2,8);
 for($i=0;$i<3;$i++)
 {
	$r[$i]=base_convert($numero,$bp,$bd[$i]);
 }
 echo "<h2>Numero in base $bp inserito in input= $numero</h2>";
 for($i=0;$i<3;$i++)
 {
	$ris=strtoupper($r[$i]);
	echo"<h2>Numero in base $bd[$i]= $ris</h2>";
 }

?>
</body>
<br><br>
<form action="convertitore.html">
<input type="submit" Value="Torna alla pagina precedente">
</form>

</html>