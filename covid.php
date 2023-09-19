<? include("phpqrcode.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Attestation de déplacement dérogatoire</title>
	</head>
	<body style = "margin:50px">	
		<h1 style = "text-align:center">ATTESTATION DE DÉPLACEMENT DÉROGATOIRE</h1>
		<p>En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire </p>
		<p>Je soussigné(e),</p>
		<p>Mme/M. : Louis HART-DAVIS</p>
		<p>Né(e) le : 30/12/1997         à : Paris 12e</p>
		<p>Demeurant : 11 boulevard des Maréchaux, 91120 Palaiseau</p>
		<p>certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé par le décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire 1 :</p>
		
		<ul>
			<li>Déplacements pour effectuer des achats de fournitures nécessaires à l'activité
professionnelle, des achats de première nécessité 3 dans des établissements dont les
activités demeurent autorisées, le retrait de commande et les livraisons à domicile.</li>
			<li>Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal
d'un kilomètre autour du domicile, liés soit à l'activité physique individuelle des
personnes, à l'exclusion de toute pratique sportive collective et de toute proximité avec
d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un
même domicile, soit aux besoins des animaux de compagnie.</li>
		</ul>

		<p><b>FAIT à : Palaiseau</b></p>
		<p><b>Le : <?php 
						$d = date("d/m/y");
						echo $d;
					?>      à :
		  <?php
		    $t1 = date("H",mktime(date("H"), date("i")-11, date("s"), 0, 0, 0))."h".date("i",mktime(date("H"), date("i")-11, date("s"), 0, 0, 0));
		    $t2 = date("H:i",mktime(date("H"), date("i")-11, date("s"), 0, 0, 0));
		    echo date("H:i:s",mktime(date("H"), date("i")-11, date("s"), 0, 0, 0));
		   ?>
		 </b></p>
		<p>Date et heure de début de sortie à mentionner obligatoirement</p>

		<ol style="font-size:0.7em;">
			<li>Les personnes souhaitant bénéficier de l'une de ces exceptions doivent se munir s'il y a lieu, lors de leurs déplacements hors de leur domicile, d'un document leur permettant de justifier que le déplacement considéré entre dans le champ de l'une de ces exceptions.</li>

			<li>A utiliser par les travailleurs non-salariés, lorsqu'ils ne peuvent disposer d'un justificatif de déplacement établi par leur employeur.</li>

			<li>Y compris les acquisitions à titre gratuit (distribution de denrées alimentaires...) et les déplacements liés à la perception de prestations sociales et au retrait d'espèces.</li>
		</ol>


		<?
			$s = "Cree le: ".$d." a ".$t1.";\n Nom: HART-DAVIS;\n Prenom: Louis;\n Naissance: 30/12/1997 a Paris;\n Adresse: 11 Boulevard des Maréchaux 91120 Palaiseau;\n Sortie: ".$d." a ".$t2.";\n Motifs: achats, sport_animaux";
			QRcode::png($s, "qr-lhd.png");
			//QRcode::png('code data text');

		?>

		<p><img src = "qr-lhd.png"/></p>


		<p style="margin-top:300px;"><img src = "qr-lhd.png" style = "width: 50%;"/></p>

	</body>
</html>
