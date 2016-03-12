<!doctype html>
<html lang="en">
<head>
 
<link href='http://fonts.googleapis.com/css?family=Spicy+Rice' rel='stylesheet' type='text/css'>
<title>Lista zadataka</title>
</head>
<body>

<?php


 $conn = mysql_connect("localhost","root","");
 mysql_select_db("test_db");
 /*
   if(! $conn ) {
    die('Could not connect: ' . mysql_error());
    }

    echo 'Connected successfully';

	  $sql = 'CREATE TABLE zadaci( '.
	'ID INT, '.
    'otvaranje DATETIME NOT NULL , '.
    'naslov VARCHAR(20) NOT NULL, '.
    'opis  TEXT NOT NULL, '.
    'status   VARCHAR(20) NOT NULL, '.
    'zavrsetak    DATE NOT NULL, '.
    'primary key (ID ))';


   
    $retval = mysql_query( $sql, $conn );

    if(! $retval ) {
    die('Could not create table: ' . mysql_error());
    }

    echo "Table zadaci created successfully\n";

    mysql_close($conn);
	*/

	$query=mysql_query("SELECT * FROM zadaci ");	
	while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
    print "<div>$row[1] $row[2] $row[3] $row[4] $row[5]</div>\n";}
	mysql_free_result($query);

	
	?>
	<form action="functions.php" method="get">
        <table>
            <tr>
                <td>
                    Otvaranje:
                </td>
                <td>
                    <input type="text" id="Otvaranje" name="Otvaranje" />
                </td>
            </tr>
            <tr>
                <td>
                    Naslov:
                </td>
                <td>
                    <input type="text" id="Naslov" name="Naslov" />
                </td>
            </tr>
            <tr>
                <td>
                    Opis:
                </td>
                <td>
                   <input type="text" id="Opis" name="Opis" />
                </td>
            </tr>
			
			<tr>
                <td>
                    Status:
                </td>
				
                <td>
                 <select id="Status" name="Status">
                        <option value="">- Choose -</option>
                        <option value="da">zavrseno</option>
                        <option value="ne">nije zavrseno</option>
                 </select>
                </td>
            </tr>
			
			
			 <tr>
                <td>
                    Zavrsetak:
                </td>
                <td>
                   <input type="text" id="Zavrsetak" name="Zavrsetak" />
                </td>
            </tr>
			
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" id="submit" value="Spremi zadatak" />
                    
                </td>
            </tr>
        </table>
    </form>
	
	


</body>

<footer>

</footer>

</html>
