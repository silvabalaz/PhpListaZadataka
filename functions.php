<?php

	// Povezivanje s bazom podataka
	$connect = mysql_connect("localhost","root","");
	mysql_select_db("test_db",$connect);
	if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
    // GET metoda slanja podataka novog zadatka
    $otvaranje = $_GET["Otvaranje"];
    $naslov = $_GET["Naslov"];
    $opis = $_GET["Opis"];
	$status = $_GET["Status"];
	$zavrsetak = $_GET["Zavrsetak"];
	
	// Pretraga tablice 'zadaci' o zadacima koji osim istog naslova imaju i isti status
	$sql1 = mysql_query("SELECT status FROM zadaci WHERE naslov = '$naslov' ",$connect);
	$response1= mysql_fetch_array($sql1, MYSQL_NUM);
	if($response1[0] == $status){ 
		error_log("Error! Postoji vec zadatak s tim naslovom i statusom.",0); 
		echo "Upisano u error_log";
	} 
	
	// Unos podataka poslanih GET metodom u tablicu 'zadaci' baze 'test_db'
	$sql = "INSERT INTO zadaci (otvaranje, naslov, opis, status, zavrsetak)
	VALUES ('$otvaranje', '$naslov', '$opis', '$status', '$zavrsetak')";
	mysql_query($sql, $connect);
    mysql_close($connect);
	  
	  


?>
