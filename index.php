<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tirage au sort</title>
	</head>
	<body>

		<?php

			$ou = array( 'M-Dracaufeu-Y',  'M-Charmina',  'Pyrax',  'Dracolosse', 'Bekipan', 'M-Laggron',  'Tokopiyon',);
			$uu = array( 'Dimoret', 'M-Altaria', 'M-Jungko', 'Latias', 'Raikou', 'Volcanion', 'Darumacho', 'Arcanin',);
			$ru = array( 'Iguolta', 'Milobellus', 'Rexillius', 'Muplodocus', 'M-Branette', 'Donphan',  'M-Oniglali',  'Archeduc');
			$nu = array( 'Pashmilla', 'Aquali', 'Guerriaigle', 'Demolosse', 'Dragmara', 'Sepiatroce', 'Jungko', 'Insécateur',);

			shuffle($ou);
			shuffle($uu);
			shuffle($ru);
			shuffle($nu);

			for($nbTeam = 0, $iou = 0, $iuu = 0; $nbTeam < 4; $nbTeam++){
				$megainteam = false;
					for(;true;$iou++){
						if(ismega(getpokemon($ou,$iou))){
							if(!$megainteam){
								echo getpokemon($ou,$iou). "<br>";
								$megainteam = true;
								break;
							}

						}
						else{
							echo getpokemon($ou,$iou). "<br>";
							break;
						}
				};

				for($nbuu = 0; $nbuu < 2; $nbuu++){
					for(;true;$iuu++){
						if(strpos($uu[$iuu%(sizeof($uu))],'M-')==0){
							if(!$mega){
								echo($uu[$iuu++%(sizeof($uu))]."<br>");
								$mega = true;
								break;
							}

						}
						else{
							echo($uu[$iuu++%(sizeof($uu))]. "<br>");
							break;

						}
					}
				};

				for($nbru = 0; $nbru < 2; $nbru++){
					for(;true;$iru++){
						if(strpos($ru[$iru%(sizeof($ru))],'M-')==0){
							if(!$mega){
								echo($ru[$iru++%(sizeof($ru))]."<br>");
								$mega = true;
								break;
							}

						}
						else{
							echo($ru[$iru++%(sizeof($ru))]. "<br>");
							break;

						}
					}
				};

				for(;true;$inu++){
					if(strpos($nu[$inu%(sizeof($nu))],'M-')==0){
						if(!$mega){
							echo($inu++%(sizeof($nu))."<br><br><br>");
							$mega = true;
							break;
						}

					}
					else{
						echo($nu[$inu++%(sizeof($nu))]."<br><br><br>");
						break;
					}

				

			};
};




			function ismega($pokename){
				if (strpos($pokename, 'M-')==0)
					return true;
				else 
					return false;
			}

			function postableau($taille,$index){
				
				return $index%$taille;
					
			}

			function getpokemon ($tableau,$index){

				return $tableau[postableau(sizeof($tableau),$index)];
			}

			function gettier ($tableau, $megainteam) {

					while($i++){
						if(ismega(getpokemon($tableau,$index))){
							if(!$megainteam){
								echo(getpokemon($tableau,$index)."<br>");
								$megainteam = true;
								break;
							}

						}
						else{
							echo(getpokemon($tableau,$index). "<br>");
							break;

						}
					}
				}	
		 ?>
		
	</body>
	</html>	