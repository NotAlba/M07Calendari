
<?php
	#Fecha Actual  
		$ADay=date("j");
		$AMonth=date("n");
		$AYear=date("Y");
	#Primer dia del mes y de la semana
		$fday= date('N',mktime(0, 0, 0, date('m'), 1));
		$dayweek=date("w",mktime(0,0,0,$AMonth,1,$AYear))+7;
		
	#Nombre de los meses
		$nmonth=array("Enero", "Febrero", "Marzo", "Abril", 
			"Mayo", "Junio", "Julio", "Agosto", "Septiembre", 
			"Octubre", "Noviembre", "Diciembre");

	#Tipos de meses
		$ThiOneDMonths=array("Enero","Marzo","Mayo","Julio","Agosto","Octubre","Diciembre" );
		$ThirtyDMonths=array("Abril","Junio","Septiembre","Noviembre");

		

	#Numero de dias del mes 
		if (in_array($nmonth[$AMonth-1], $ThiOneDMonths) ) {
				$LastDayM=31;	
			}	
		elseif  (in_array($nmonth[$AMonth-1], $ThirtyDMonths)) {
				$LastDayM=30;	
		}else{
				$LastDayM=28;	
		}
		$Endofcalendar=$dayweek+$LastDayM;	
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
	<style type="text/css">

		.today{
			background-color: red;
		}
		#calendario{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php

	    if ($nmonth==0) {
	    	echo $nmonth[11]." ".$AYear;
	 	} else{
	 		echo $nmonth[$AMonth-1]." ".$AYear;
	 		}
	?>
		<table id="calendario">
			<tr>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miercoles</th>
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sabado</th>
				<th>Domingo</th>
			</tr>
			<tr>
		<?php 

		

		for($i=1;$i<=42;$i++)

		{
			if($i==$dayweek)
			{
				$day=1;
			}
			if($i<$dayweek || $i>=$Endofcalendar)

			{
				echo "<td>&nbsp;</td>";
			}else{

				if($day==$ADay)

					echo "<td class='today'>$day</td>";
				else
					echo "<td>$day</td>";
					$day++;

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
