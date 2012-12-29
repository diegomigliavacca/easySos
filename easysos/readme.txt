ITALIANO

1) Creare il database utilizzando il file "database.sql" utilizzando il postgis model) - il database è quello prodotto da 52North, ed è stato testato su PostgreSQL 8.3/9.0 e PostGIS 1.5

2) Il modo migliore per procedere è inserire i dati di esempio nel database. questo passaggio è utile per capire più facilmente come funziona il sistema. A questo punto, si può popolare il database utilizzando il file pop_izsve

3) Decomprimere il file sos.rar nella cartella htdocs del server Apache - testato su Apache 2.2

4) Aprire il file protected->config->main.php, andare alla riga 'db' e inserire il nome del db, username e password per il collegamento al database

5) Aprire il file service->db.php e inserire nome, username e password del database

6) Puntare il browser all'indirizzo http://localhost/easysos/index.php

7) Creare, visualizzare, aggiornare o eliminare dati dal database è piuttosto semplice, non servono ulteriori istruzioni (sono operazioni CRUD per l'utente administrator). Per il login inserire: admin admin

8) Cliccare su GetCapabilities, DescribeSensor e GetObservation per visualizzare i metadati di risposta da parte del server (per ora è disponibile solo l'operazione GetObservation)

9) Se necessario, è possibile modificare i metadati XML contenuti nel file service->get.php. Per fare questo, si utilizzano semplici comandi come "startElement", "writeAttribute", "endElement". Fare riferimento alla documentazione relativa a PHP Xml Writer

10) Sarà necessario anche creare un client appropriato editando il file protected->views->site->index.php



ENGLISH

1) Create the database using the file named "database.sql" using the postgis template - tested on PostgreSQL 8.3/9.0 and PostGIS 1.5

2) The best way to proceed is using the sample data provided. This stage is useful to understand easily how the system works (you can skip this stage, anyway). So, fill the database using the file "pop_izsve"

3) Decompress the file "sos.rar" and put both folders inside "htdocs" folder on Apache http server - tested on Apache 2.2

4) Open the file protected->config->main.php, find the line 'db' and insert db name, username and password to access the database

5) Open the file service->db.php and insert db name, username and password to access the database

6) Point your web browser to http://localhost/easysos/index.php

7) Create, read, update and delete data is quite easy, it needn't more training. To log in use: admin admin (you will change your password later)

8) Click on GetCapabilities, DescribeSensor or GetObservation links to display the server response metadata (just the GetObservation operation is available for now)

9) If you need, you can modify XML metadata inside service->get.php. It's just a "startElement", "writeAttribute", "endElement" matter. Refer at PHP Xml Writer documentation

10) You will need to create a proper client editing the file protected->views->site->index.php