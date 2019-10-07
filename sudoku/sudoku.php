<!DOCTYPE html>
<html>
<head>
	<title>Sudoku</title>
	<style type="text/css">
		table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
  			
		}
		table{
			border: 2px solid black;
		}
		#sudoku{
			text-align: center;
		}
		tr.arriba{
			border-top: 2px solid black;


		}
		td.lateral{
			border-right: 2px solid black;

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
				if ($y==3 || $y==6) {
					echo "<tr class='arriba'></tr>\n";	
				}else{
					echo "<tr></tr>\n";	
				}

				
				for ($z=0; $z <$matrixlength ; $z++) {
					if ($z==2 || $z==5) {	
						echo "<td class='lateral'>".$matrix[$y][$z]."</td>";
					}else{
						echo "<td>".$matrix[$y][$z]."</td>";	
					}	
				}

			}

		?>
	</table>


</body>
</html>


