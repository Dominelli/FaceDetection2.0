<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chart.js - graphics</title>
		<!--
		<link rel="stylesheet" href="assets/demo.css">
		<script src="../node_modules/dat.gui/build/dat.gui.min.js"></script>
		<script src="../tracking.js-master/assets/stats.min.js"></script>
		-->
		<script src="Chart.bundle.js"></script>
		
		<style>
			body {  
				/*background: floralwhite;*/
				background-image: url("FaceDect_background.png");
				padding: 16px;
			}
				
			canvas {
				border: 1px dotted black;
			}
				
			.chart-container {
				position: relative;
				margin: 0px;
				height: 40vh;
				width: 70%;
			}
			
			.testo {
				border: 1px dotted black;
				width: 25%;
				height: 100%;
				float: right;
				padding: 5px 5px;
				text-align: center;
				background-color: #e6e6e6;
				color: black;
			}
			
			#adminButton {
				border: none;
				width: 100%;
			}
			
			/* admin login */
				input[type=text], input[type=password] {
					width: 100%;
					padding: 12px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					box-sizing: border-box;
				}

				button {
					background-color: #ffcb55;
					color: black;
					padding: 14px 20px;
					margin-top: 14px;
					border: none;
					cursor: pointer;
					width: 100%;
				}

				button:hover {
					opacity: 0.8;
				}

				.cancelbtn {
					width: auto;
					padding: 10px 18px;
					background-color: #f44336;
				}

				.imgcontainer {
					text-align: center;
					margin: 24px 0 12px 0;
					position: relative;
				}

				.container {
					padding: 16px;
				}

				span.psw {
					float: right;
					padding-top: 16px;
				}

				.modal {
					display: none;
					position: fixed;
					z-index: 1;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					overflow: auto;
					background-color: rgb(0,0,0);
					background-color: rgba(0,0,0,0.4);
					padding-top: 60px;
				}

				.modal-content {
					background-color: #fffaf0;
					margin: 5% auto 15% auto;
					border: 1px solid #888;
					width: 80%;
				}

				.close {
					position: absolute;
					right: 25px;
					top: 0;
					color: #000;
					font-size: 35px;
					font-weight: bold;
				}

				.close:hover,
				.close:focus {
					color: red;
					cursor: pointer;
				}

				.animate {
					-webkit-animation: animatezoom 0.6s;
					animation: animatezoom 0.6s
				}

				@-webkit-keyframes animatezoom {
					from {-webkit-transform: scale(0)} 
					to {-webkit-transform: scale(1)}
				}
					
				@keyframes animatezoom {
					from {transform: scale(0)} 
					to {transform: scale(1)}
				}

				@media screen and (max-width: 300px) {
					span.psw {
					   display: block;
					   float: none;
					}
					.cancelbtn {
					   width: 100%;
					}
				}
				
				#recensione
				{
				  margin-left: 75%;
				  padding: 0px;
				  height: 16px;
				  list-style: none;
				}
				#STAR_RATING li
				{
				  width: 20px;
				  height: 20px;
				  display: block;
				  float: left;
				  background-image: url('star-off.png');
				  background-repeat: no-repeat;
				  cursor: pointer;
				}
				#STAR_RATING li.on
				{
				  background-image: url('star-on.png');
				}
				#STAR_RATING span.output
				{
				  padding: 3px;
				  color: #339900;
				  font-weight: bold;
				}

				.css3_esempio_2 span {
					font-size:100px;
					line-height:67.5%;
					position: relative;
					display:inline-block;
					overflow:hidden;
				}    
				.css3_esempio_2 .first_layer:before,
				.css3_esempio_2 .second_layer:before,
				.css3_esempio_2 .third_layer:before,
				.css3_esempio_2 .fourth_layer:before,
				.css3_esempio_2 .fifth_layer:before  {
					display:block;
					z-index:5;
					position:absolute;
					height: 20%;
					content: attr(data-char); /* dynamic content for the pseudo element */
					overflow:hidden;
					color: #ff1d26;
				}
				.css3_esempio_2 .second_layer:before {z-index:4;height: 40%;color: #f8972c;}
				.css3_esempio_2 .third_layer:before {z-index:3;height: 60%;color: #fec92c;}
				.css3_esempio_2 .fourth_layer:before {z-index:2;height: 80%;color: #8bd23e;}
				.css3_esempio_2 .fifth_layer:before {z-index:1;height: 100%;color: #c000b5;}  
				
				.footer {
					position: fixed;
					left: 0;
					bottom: 0;
					width: 100%;
					background-color: #e6e6e6;
					color: black;
					text-align: center;
				}
				.button {
					background-color: #4CAF50;
					border-radius: 12px;
					border: none;
					color: white;
					padding: 15px 32px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 16px;
					margin: 4px 2px;
					cursor: pointer;
				}
				
				#container {
					width:100%;
					text-align:center;
				}

				#left {
					float:left;
				}

				#right {
					float:right;
				}

				tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
	</head>
	<body > 
	
	<!--
	<div class="header1" align="center">
  		<p>London is the capital city of England.</p>
	</div>
	-->
	
	<div class="css3_esempio_2" align="left">
		<span class="fifth_layer" data-char="F"><span class="fourth_layer" data-char="F"><span class="third_layer" data-char="F"><span class="second_layer" data-char="F"><span class="first_layer" data-char="F">F</span></span></span></span></span>
		<span class="fifth_layer" data-char="A"><span class="fourth_layer" data-char="A"><span class="third_layer" data-char="A"><span class="second_layer" data-char="A"><span class="first_layer" data-char="A">A</span></span></span></span></span>
		<span class="fifth_layer" data-char="C"><span class="fourth_layer" data-char="C"><span class="third_layer" data-char="C"><span class="second_layer" data-char="C"><span class="first_layer" data-char="C">C</span></span></span></span></span>
		<span class="fifth_layer" data-char="E"><span class="fourth_layer" data-char="E"><span class="third_layer" data-char="E"><span class="second_layer" data-char="E"><span class="first_layer" data-char="E">E</span></span></span></span></span>
		<span class="fifth_layer" data-char="D"><span class="fourth_layer" data-char="D"><span class="third_layer" data-char="D"><span class="second_layer" data-char="D"><span class="first_layer" data-char="D">D</span></span></span></span></span>
		<span class="fifth_layer" data-char="E"><span class="fourth_layer" data-char="E"><span class="third_layer" data-char="E"><span class="second_layer" data-char="E"><span class="first_layer" data-char="E">E</span></span></span></span></span>
		<span class="fifth_layer" data-char="T"><span class="fourth_layer" data-char="T"><span class="third_layer" data-char="T"><span class="second_layer" data-char="T"><span class="first_layer" data-char="T">T</span></span></span></span></span>
		<span class="fifth_layer" data-char="E"><span class="fourth_layer" data-char="E"><span class="third_layer" data-char="E"><span class="second_layer" data-char="E"><span class="first_layer" data-char="E">E</span></span></span></span></span>
		<span class="fifth_layer" data-char="C"><span class="fourth_layer" data-char="C"><span class="third_layer" data-char="C"><span class="second_layer" data-char="C"><span class="first_layer" data-char="C">C</span></span></span></span></span>
		<span class="fifth_layer" data-char="T"><span class="fourth_layer" data-char="T"><span class="third_layer" data-char="T"><span class="second_layer" data-char="T"><span class="first_layer" data-char="T">T</span></span></span></span></span>
		<span class="fifth_layer" data-char="I"><span class="fourth_layer" data-char="I"><span class="third_layer" data-char="I"><span class="second_layer" data-char="I"><span class="first_layer" data-char="I">I</span></span></span></span></span>
		<span class="fifth_layer" data-char="O"><span class="fourth_layer" data-char="O"><span class="third_layer" data-char="O"><span class="second_layer" data-char="O"><span class="first_layer" data-char="O">O</span></span></span></span></span>
		<span class="fifth_layer" data-char="N"><span class="fourth_layer" data-char="N"><span class="third_layer" data-char="N"><span class="second_layer" data-char="N"><span class="first_layer" data-char="N">N</span></span></span></span></span>

	</div>

	<!--<div id="testo" class="testo">
			<h1>FaceDetection</h1>
				<h3>
					Lo scopo di questo progetto è di rilevare le facce tramite una webcam.<br>
					Il numero dei volti rilevati dal programma viene salvato e immesso<br>
					all` interno di dei grafici, in modo da avere un conteggio<br>
					delle persone rilevate in base alla fascia oraria.<br>
				</h3>
			
			<div class="testo" id="adminButton">
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
				-->
				
		</div>
		<div class="chart-container">
			<canvas id="chartNumeroVisite"></canvas>
			<br>
			<canvas id="chartTempoMedio"></canvas>
		</div>
		<!--<button onclick="document.getElementById('id01').style.display='block'" class="button">Login</button>-->
		<div id="testo" class="testo">
			<p>Posted by: Lucas Previtali Gionata Battaglioni</p>
			<p>Contact Mr. Previtali for information: <a href="mailto:lucas.previtali@samtrevano.ch">lucas.previtali@samtrevano.ch</a>.</p>
			<p>Contact  Mr. Battaglioni for information: <a href="mailto:gionata.battaglioni@samtrevano.ch">gionata.battaglioni@samtrevano.ch</a>.</p>
			<p>&copy; 2018 FaceDetection  <a href="http://www.cpt-ti.ch/index.php/aree/informatica">SAMT sez. Informatica</a><p>
		</div>

		<?php
			//require_once("connection.php");
			//connection();
			
			$servername = "(local)";
			$username = array("Database"=>"facedetection");
			$conn = sqlsrv_connect($servername, $username);
			
			if( $conn === false ){
				 echo "Errore di connessione.\n";  
				 die( print_r( sqlsrv_errors(), true));  
			}
			
			$sql = "SELECT Inizio, Fine FROM tempo_visita";
			$result = sqlsrv_query($conn, $sql);
			if ($result === FALSE) {
				die( print_r( sqlsrv_errors(), true) );
				echo "Errore di connessione";
			}
			
			$Orario_inizio=array();
			$Orario_fine=array();
			$Data=array();
			$Durata=array();
			$arrayIndex = 0;
			$diff = 0;
			
			while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
				array_push($Orario_inizio, $row["Inizio"]->format('H:i:s'));
				$diff = $row["Fine"]->format('s') - $row["Inizio"]->format('s');
				array_push($Durata, $diff);
				//echo $row['Inizio'].", ".$row['Fine']."<br />";
			}
			sqlsrv_free_stmt( $result);
			$countUsers=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
			for ($i = 0; $i < count($Orario_inizio);$i++) {
				if (substr($Orario_inizio[$i],0,2)>=9 && substr($Orario_inizio[$i],0,2)<10) {
					$countUsers[0]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=10 && substr($Orario_inizio[$i],0,2)<11) {
					$countUsers[1]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=11 && substr($Orario_inizio[$i],0,2)<12) {
					$countUsers[2]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=12 && substr($Orario_inizio[$i],0,2)<13) {
					$countUsers[3]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=13 && substr($Orario_inizio[$i],0,2)<14) {
					$countUsers[4]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=14 && substr($Orario_inizio[$i],0,2)<15) {
					$countUsers[5]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=15 && substr($Orario_inizio[$i],0,2)<16) {
					$countUsers[6]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=16 && substr($Orario_inizio[$i],0,2)<17) {
					$countUsers[7]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=17 && substr($Orario_inizio[$i],0,2)<18) {
					$countUsers[8]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=18 && substr($Orario_inizio[$i],0,2)<19) {
					$countUsers[9]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=19 && substr($Orario_inizio[$i],0,2)<20) {
					$countUsers[10]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=20 && substr($Orario_inizio[$i],0,2)<21) {
					$countUsers[11]+=1;
				}else if (substr($Orario_inizio[$i],0,2)>=21 && substr($Orario_inizio[$i],0,2)<22) {
					$countUsers[12]+=1;
				}else if (substr($Orario_inizio[$i],0,2)==22) {
					$countUsers[13]+=1;
				}
			}
			$mediaUsers=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
			for ($i = 0; $i < count($Orario_inizio);$i++) {
				if (substr($Durata[$i],6,6)>=0 && substr($Durata[$i],6,6)<10 && substr($Durata[$i],3,2)==0){
					$mediaUsers[0]+=1;
				}else if (substr($Durata[$i],6,6)>=10 && substr($Durata[$i],6,6)<20 && substr($Durata[$i],3,2)==0) {
					$mediaUsers[1]+=1;
				}else if (substr($Durata[$i],6,6)>=20 && substr($Durata[$i],6,6)<30 && substr($Durata[$i],3,2)==0) {
					$mediaUsers[2]+=1;
				}else if (substr($Durata[$i],6,6)>=30 && substr($Durata[$i],6,6)<40 && substr($Durata[$i],3,2)==0) {
					$mediaUsers[3]+=1;
				}else if (substr($Durata[$i],6,6)>=40 && substr($Durata[$i],6,6)<50 && substr($Durata[$i],3,2)==0) {
					$mediaUsers[4]+=1;
				}else if (substr($Durata[$i],6,6)>=50 && substr($Durata[$i],6,6)<60 && substr($Durata[$i],3,2)==0) {
					$mediaUsers[5]+=1;
				}else if (substr($Durata[$i],6,6)>=00 && substr($Durata[$i],6,6)<10 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[6]+=1;
				}else if (substr($Durata[$i],6,6)>=10 && substr($Durata[$i],6,6)<20 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[7]+=1;
				}else if (substr($Durata[$i],6,6)>=20 && substr($Durata[$i],6,6)<30 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[8]+=1;
				}else if (substr($Durata[$i],6,6)>=30 && substr($Durata[$i],6,6)<40 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[9]+=1;
				}else if (substr($Durata[$i],6,6)>=40 && substr($Durata[$i],6,6)<50 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[10]+=1;
				}else if (substr($Durata[$i],6,6)>=50 && substr($Durata[$i],6,6)<60 && substr($Durata[$i],3,2)==1) {
					$mediaUsers[11]+=1;
				}else if (substr($Durata[$i],6,6)>=0 && substr($Durata[$i],6,6)<10 && substr($Durata[$i],3,2)==2) {
					$mediaUsers[12]+=1;
				}else if (substr($Durata[$i],6,6)>=10 && substr($Durata[$i],3,2)>1) {
					$mediaUsers[13]+=1;
				}
			}
			
			$refresh=10000;
			$sql = "SELECT * from impostazioni where Testo like 'refresh'";
			$result = sqlsrv_query($conn, $sql);
			if ($result === FALSE) {
				die( print_r( sqlsrv_errors(), true) );
				echo "Errore di connessione";
			}
			
			while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
				$refresh=$row["Valore"]*1000;
			}
			
			
			//$conn->close();
		?>
		<script>

		var dataNumeroVisite = {
			labels: ["09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00"],
			datasets: [{
				label: "Numero di visite",
				backgroundColor: "rgba(255,99,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				borderWidth: 2,
				hoverBackgroundColor: "rgba(255,99,132,0.4)",
				hoverBorderColor: "rgba(255,99,132,1)",
				data: [<?php echo $countUsers[0]; ?>, <?php echo $countUsers[1]; ?>, <?php echo $countUsers[2]; ?>, <?php echo $countUsers[3]; ?>, <?php echo $countUsers[4]; ?>, <?php echo $countUsers[5]; ?>, <?php echo $countUsers[6]; ?>, <?php echo $countUsers[7]; ?>, <?php echo $countUsers[8]; ?>, <?php echo $countUsers[9]; ?>, <?php echo $countUsers[10]; ?>, <?php echo $countUsers[11]; ?>, <?php echo $countUsers[12]; ?>,<?php echo $countUsers[13]; ?>],
			}]
		};
			
		var optionsNumeroVisite = {
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
				stacked: true,
				gridLines: {
					display: true,
					color: "rgba(255,99,132,0.2)"
				}
				}],
				xAxes: [{
				gridLines: {
					display: false
				}
				}]
			}
		};
		
		var dataTempoMedio = {
			labels: ["0-10","10-20", "20-30", "30-40", "40-50", "50-60", "60-70", "70-80", "80-90", "90-100", "100-110", "110-120", "130-140", "140<"],
			datasets: [{
				label: "Tempo medio di visita",
				backgroundColor: "rgba(99,132,255,0.2)",
				borderColor: "rgba(99,132,255,1)",
				borderWidth: 2,
				hoverBackgroundColor: "rgba(99,132,255,0.4)",
				hoverBorderColor: "rgba(99,132,255,1)",
				data: [<?php echo $mediaUsers[0]; ?>,<?php echo $mediaUsers[1]; ?>,<?php echo $mediaUsers[2]; ?>,<?php echo $mediaUsers[3]; ?>,<?php echo $mediaUsers[4]; ?>,<?php echo $mediaUsers[5]; ?>,<?php echo $mediaUsers[6]; ?>,<?php echo $mediaUsers[7]; ?>,<?php echo $mediaUsers[8]; ?>,<?php echo $mediaUsers[9]; ?>,<?php echo $mediaUsers[10]; ?>,<?php echo $mediaUsers[11]; ?>,<?php echo $mediaUsers[12]; ?>,<?php echo $mediaUsers[13]; ?>],
			}]
		};
			
		var optionsTempoMedio = {
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
				stacked: true,
				gridLines: {
					display: true,
					color: "rgba(99,132,255,0.2)"
				}
				}],
				xAxes: [{
				gridLines: {
					display: false
				}
				}]
			}
		};
		
		Chart.Bar('chartNumeroVisite', {
			options: optionsNumeroVisite,
			data: dataNumeroVisite
		});
		Chart.Bar('chartTempoMedio', {
			options: optionsTempoMedio,
			data: dataTempoMedio
		});
		// faccio il preload dell'immagine utilizzata per l'effetto rollover
		setTimeout(function(){location.reload() }, <?php echo $refresh; ?>);
		</script>
		<form id="form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post">
</script>


</body>
</html>