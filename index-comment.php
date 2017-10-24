<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tirage au sort</title>
</head>
<body>

	<?php
	/* --------- Declaration des pokemon du tiers OU -------- */

	$ou = array( 'M-Dracaufeu-Y',  'M-Charmina',  'Pyrax',  'Dracolosse', 'Bekipan', 'M-Laggron',  'Tokopiyon');

	/* --------- Declaration des pokemon du tiers UU -------- */

	$uu = array( 'Dimoret', 'M-Altaria', 'M-Jungko', 'Latias', 'Raikou', 'Volcanion', 'Darumacho', 'Arcanin');

	/* --------- Declaration des pokemon du tiers RU -------- */

	$ru = array( 'Iguolta', 'Milobellus', 'Rexillius', 'Muplodocus', 'M-Branette', 'Donphan',  'M-Oniglali',  'Archeduc');

	/* --------- Declaration des pokemon du tiers NU -------- */

	$nu = array( 'Pashmilla', 'Aquali', 'Guerriaigle', 'Demolosse', 'Dragmara', 'Sepiatroce', 'Jungko', 'Insécateur');

	/* --------- On melange la liste des poké par tiers pour le tirage -------- */			

	shuffle($ou);
	shuffle($uu);
	shuffle($ru);
	shuffle($nu);

	$megainteam = false;

	gettier($ou,$iou,$megainteam);

	/* --------- Tirage des pokemon (1 ou, 2 uu, 2 ru, 1 nu, 1 mega/team), verification des megas -------- */			

			for($nbTeam = 0, $iou = 0, $iuu = 0; $nbTeam < 4; $nbTeam++){ 	//incrementation des tirages

				$megainteam = false; //pas de mega dans la team par defaut

				/* --------- Tirage du pokemon OU -------- */				

				gettier($ou,$iou,$megainteam);

				/* --------- Tirage des 2 pokemon UU -------- */

				for($nbuu = 0; $nbuu < 2; $nbuu++){

					gettier($uu,$iuu,$megainteam);

				};

				/* --------- Tirage des 2 pokemon RU -------- */				

				for($nbru = 0; $nbru < 2; $nbru++){

					gettier($ru,$iru,$megainteam);

				};

				/* --------- Tirage du pokemon NU -------- */				

				gettier($nu,$inu,$megainteam);

			};

			/* --------- Declaration des fonction utiles pour le tirage -------- */			

			function ismega($pokename){	

				$pokename = getpokemon($tableau,$index);
														//cette fonction sert a verifier si le pokemon est mega
				if (strpos($pokename, 'M-')==0)
												 		// car il faut une seule méga par team. 
					return true;
														// on fait cela en verifiant si le nom du poke
				else 			
														// commence par M-
					return false;
			};

			function postableau($taille,$index){	//Cette fonction sert a faire en sorte que lorsqu'on
													//tire un poke qui est dans les derniers de la liste,
				return $index%$taille;				//le prochain tirage revienne au debut afin qu'ils soient
													//tous tirés.
			};

			function getpokemon ($tableau,$index){	//cette fonction sert a tirer un pokemon au sort

				return $tableau[postableau(sizeof($tableau),$index)];

			};

			function gettier ($tableau, $index, $megainteam) { //

				while($i++){

					if(ismega(getpokemon($tableau,$index))){

						if(!$megainteam){

							echo(getpokemon($tableau,$index). "<br>");

							$megainteam = true;

							break;
						}

					}
					else{

						echo(getpokemon($tableau,$index). "<br>");

						break;

					}
				};
			};	
			?>
			
		</body>
		</html>	