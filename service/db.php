<?php
// $conn = new COM("ADODB.Connection") or die("non riesco ad attivare ADO");
// $conn->Open("driver={PostgreSQL Unicode};SERVER=localhost;Database=SosDatabase;UID=XXXXXX;PWD=XXXXXX");
 $dbconn = pg_connect("host=localhost dbname=SosDatabase user=XXXXXX password=XXXXXX")
   or die('Could not connect: ' . pg_last_error());
?>