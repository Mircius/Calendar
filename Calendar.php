<?php
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",	"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$mes=date("n");
$anio=date("Y");
$hoy=date("j");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$anio));
if($diaSemana==0) {
	$diaSemana=7;
}
$ultimoDia=date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<style>
		h1 {
			text-align: center;
			margin-bottom: 1em;
		}
		table {
			margin: 0 auto;
		}
		td {
			text-align: center;
			width: 6em;
			padding: 1em;
		}
		td {
			text-align: center;
			width: 6em;
			padding: 1em;
		}
		#hoy {
			background-color: #b12b21;
			color: white;

		}
		.dia:hover {
			background-color: #70a2f9;
			color: white;
		}
	</style>
</head>
 
<body>
	<h1>
		<?php
			echo $meses[$mes]." ".$anio;
		?>
	</h1>
<table id="calendario">
	<tr>
		<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th>
	</tr>
	<tr >
		<?php
		$ultimaCasilla=$diaSemana+$ultimoDia;

		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				$dia=1;
			}
			if($i<$diaSemana || $i>=$ultimaCasilla)
			{
				echo "<td>&nbsp;</td>";
			}else{
				if($dia==$hoy)
					echo "<td id='hoy' class=hoy >$dia</td>";
				else
					echo "<td class=dia >$dia</td>";
				$dia++;
			}
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>