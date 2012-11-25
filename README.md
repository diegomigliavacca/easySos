**INFOS**

EasySos is a quite easy-to-use and expand implementation of the OGC <a href="http://www.opengeospatial.org/standards/sos" target="_blank">Sensor Observation Service (SOS)</a> specification.

It's based on 52North database for PostgreSQL and PostGIS. I added CRUD operations by PHP YII Frameworks for Administrator create, read, update and delete operations. The server side is based on XML-RPC written in PHP Xml Writer.


<BR /><BR />
**DOCUMENTATION**

1) Create the database using the file named "database.sql" using the postgis model - tested on PostgreSQL 8.3/9.0 and PostGIS 1.5/2.0

2) The best way to proceed is using sample data. This stage is useful to understand how the system works (you can skip this stage, anyway). So, fill the database using the file "pop_izsve"

3) Decompress the file "sos.rar" and put both folders inside "htdocs" folder on Apache http server - tested on Apache 2.2

4) Open the file protected->config->main.php, find the line 'db' and insert db name, username and password to access the database

5) Open the file service->db.php and insert db name, username and password to access the database

6) Point your web browser to http://localhost/easysos/index.php

7) Create, read, update and delete data is quite easy, it needn't more training. To log in use: admin admin (you will change your password later)

8) Click on GetCapabilities, DescribeSensor or GetObservation links to display the server response metadata (just the GetObservation operation is available for now)

9) If you need, you can modify XML metadata inside service->get.php. It's just a "startElement", "writeAttribute", "endElement" matter. Refer at PHP <a href="http://php.net/manual/en/book.xmlwriter.php" target="_blank">Xml Writer</a> documentation

10) You will need to create a proper client editing the file protected->views->site->index.php