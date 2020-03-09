<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);
error_reporting(E_ALL);
ini_set('display_errors', true);        
ini_set('html_errors', true);
/**
* Mauricio Bermudez Vargas 11/07/2018 10:45 p.m.
*/

?>
<html>
<head>
<meta charset="utf-8">
<meta name="autor" content="Mauricio Bermúdez Vargas" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="css/css_Seleccion.css">
<title>Administración</title>
<script type="text/javascript" src="jq/jquery-3.2.1.min.js"></script>
</head> 
<body>

<div id="menu" class="menu">	
	<a id="imprimir" class="imprimir" href="reporte_almuerzo.php"></a>
	<a id="estudiante" href="estudiante_Mantenimiento.php"></a>
	<a id="upload" href="cargar_Excel.html"></a>	
</div>

<div class="container">
<div id="div_boton" class="item" tabindex="1">
	<a id="hyp_solicitud" class="cell" href="marca.php?tipo=4">Transporte</a>		
	
</div>
</div>

<script>

$('.imprimir').html('<img src="img/print.png">');
$('#estudiante').html('<img src="img/cliente.png">');
$('#upload').html('<img src="img/upload.png">');

</script>			
</body>
</html>