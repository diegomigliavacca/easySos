<?php
// $conn = new COM("ADODB.Connection") or die("non riesco ad attivare ADO");
// $conn->Open("driver={PostgreSQL Unicode};SERVER=localhost;Database=SosDatabase;UID=xxxxxx;PWD=xxxxxx");
 $dbconn = pg_connect("host=localhost dbname=SosDatabase user=xxxxxx password=xxxxxx")
   or die('Could not connect: ' . pg_last_error());

?>