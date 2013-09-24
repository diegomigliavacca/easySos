**INFOS**

EasySos is a quite easy-to-use and expand implementation of the OGC <a href="http://www.opengeospatial.org/standards/sos" target="_blank">Sensor Observation Service (SOS)</a>, <a href="http://www.opengeospatial.org/standards/om" target="_blank">O&M</a> and  <a href="http://www.opengeospatial.org/standards/sensorml" target="_blank">SensorML</a> specifications (a subset of the SWE framework). It gets to be useful for sharing observations (e.g. Open Data portals) in a standard way.

EasySos is based on the 52North database for PostgreSQL and PostGIS. I added CRUD operations by PHP YII Framework for the Administrator create, read, update and delete operations. The SOS service is based on a REST service written using the PHP <a href="http://php.net/manual/en/book.xmlwriter.php" target="_blank">Xml Writer</a> library.


<BR />
**DOCUMENTATION**

1) Create the database using the file named "database.sql" using the postgis template - tested on PostgreSQL 8.3/9.0 and PostGIS 1.5 (it will not work on PostGis 2.0)

2) The best way to proceed is using the sample data provided. This stage is useful to understand easily how the system works (you can skip this stage, anyway). So, fill the database using the file "pop_izsve"

3) Put all the folders inside the Apache http server "htdocs" folder - tested on Apache 2.2

4) Download <a href="http://www.yiiframework.com" target="_blank">YII framework</a>, decompress the archive, rename the folder in "yii-1.1.13" and put it in the "htdocs" folder

5) Open the file protected->config->main.php, find the line 'db' and insert db name, username and password to access the database

6) Open the file service->db.php and insert db name, username and password to access the database

7) Point your web browser to http://localhost/index.php

8) Create, read, update and delete data is quite easy, you needn't more training. To log in use: admin admin (you will change your password later)

9) Click on GetCapabilities, DescribeSensor or GetObservation links to display the server response metadata (just the GetObservation operation is available for now)

10) If you need, you can modify the XML metadata inside service->get.php. It's just a "startElement", "writeAttribute", "endElement" matter. Refer at the PHP <a href="http://php.net/manual/en/book.xmlwriter.php" target="_blank">Xml Writer</a> documentation

11) You will need to create a proper client side editing the file protected->views->site->index.php

12) Get involved in developing EasySos