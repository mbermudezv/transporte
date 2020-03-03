<?php
// *********** 
// Mauricio Bermudez Vargas 29/11/2019 10:12 a.m.
// ***********

ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);
error_reporting(E_ALL);
ini_set('display_errors', false);        
ini_set('html_errors', true);

try 
{


} catch (PDOException $e) {		
	echo "Error al conectar con la base de datos: " . $e->getMessage() . "\n";
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="autor" content="Mauricio Bermúdez Vargas" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="css/css_marca.css">
    <title>Marca</title>
    <script type="text/javascript" src="/jq/jquery-3.2.1.min.js"></script>   
    <script type="text/javascript" src="/js/quagga.min.js"></script>
</head>
<body>
<label id="test">

</label>
<div id="menu">
	<a id="salir" href="seleccion.php"></a>
	<a id="add" href="busca_Estudiante.php?tipo=<?php echo $getTipoMarca; ?>"></a>	
</div>
<div id="mainArea">
</div>
<div id="statusBar">
    <a id="linkHogar" href="https://www.lasesperanzas.ed.cr">lasesperanzas.ed.cr</a>
    <a id="linkWappcom"href="https://www.wappcom.net">wappcom.net</a>                                       
</div>

<script language='javascript'>


$('#salir').html('<img src="img/salir.png">');
$('#add').html('<img src="img/add.png">');

</script>

</body>
</htm>

