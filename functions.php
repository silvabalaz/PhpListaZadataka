<?php


	
	$connect = mysql_connect("localhost","root","");
	mysql_select_db("test_db",$connect);
      

    $otvaranje = $_GET["Otvaranje"];
    $naslov = $_GET["Naslov"];
    $opis = $_GET["Opis"];
	$status = $_GET["Status"];
	$zavrsetak = $_GET["Zavrsetak"];
	

    

 /*
	$sql1 = mysql_query("SELECT status FROM zadaci WHERE naslov = '$naslov' ",$sql_connection);

	
    $response1= mysql_fetch_array($sql1, MYSQL_NUM);
	echo $response1[0];
	$sql2 = mysql_query("SELECT naslov FROM zadaci WHERE status = $status ");
	

	if(($sql1!=null)&&($response1==$status)&&($response1!=null)){ 
	
	error_log("Error! Postoji vec zadatak s tim naslovom i statusom.",0); 
	echo "Upisano u error_log";
	} */
 
	$sql = "INSERT INTO zadaci (otvaranje, naslov, opis, status, zavrsetak)
	VALUES ('$otvaranje', '$naslov', '$opis', '$status', '$zavrsetak')";

	mysql_query($sql, $connect);
 
    mysql_close($connect);
	  
	  


?>
