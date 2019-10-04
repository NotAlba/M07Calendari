<!DOCTYPE html>
<html>
<head>
	<title>Sudoku</title>
	<style type="text/css">
		table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
		}
		#sudoku{
			text-align: center;
		}
	</style>
</head>
<body>

	<table id="sudoku">	
		<?php 
			$randomrow=rand(0,8);
			$randomcolumn=rand(0,8);
			$randomnumber=rand(1,9);
			$blankspace= "&nbsp;&nbsp;&nbsp";
			$matrix=array();


			#creacio matriu
			for ($i=0; $i < 9 ; $i++) {
				$rowarr = array();
				for ($x=0; $x <9 ; $x++) {		
					$value= "$blankspace";
					array_push($rowarr,$value);
				}
				$matrix[]=$rowarr;
			}
			
			$matrixlength=count($matrix);
			$contador=0;

			while ($contador<= 20) {
				$randomrow=rand(0,8);
				$randomcolumn=rand(0,8);
				$randomnumber=rand(1,9);
				if ($matrix[$randomcolumn][$randomrow]==$blankspace)
				{
					$matrix[$randomcolumn][$randomrow] = $randomnumber;
					$contador+=1;
				}
				
			}
			#creacio taula a partir de matriu
			for ($y=0; $y < $matrixlength ; $y++) {
				echo "</tr><tr>\n";	
				for ($z=0; $z <$matrixlength ; $z++) {	
					echo "<td>".$matrix[$y][$z]."</td>";	
				}

			}

		?>
	</table>


</body>
</html>


