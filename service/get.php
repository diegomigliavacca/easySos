<?php
include("db.php");

class getObserv extends XMLWriter 
{    
    public function __construct() 
    {
		$this->openURI("php://output");
        $this->startDocument("1.0", "utf-8");
        $this->setIndent(true);
        $this->startElementNS("om", "ObservationCollection", "http://www.opengis.net/om/2.0");
            $this->writeAttributeNS("xsi", "schemaLocation", "http://www.w3.org/2001/XMLSchema_instance", "http://schemas.opengis.net/om/2.0/observation.xsd");
			
		$query = "select observation.observation_id, observation.time_stamp, observation.numeric_value, phenomenon.phenomenon_description, feature_of_interest.feature_of_interest_description, ST_AsText(geom) as pos, procedure.description_type from observation join phenomenon on observation.phenomenon_id = phenomenon.phenomenon_id join feature_of_interest on observation.feature_of_interest_id = feature_of_interest.feature_of_interest_id join procedure on observation.procedure_id = procedure.procedure_id order by observation.observation_id";
		$result = pg_query($query) or die("Query failed: " . pg_last_error());
			while ($a = pg_fetch_array($result, null, PGSQL_ASSOC)) {
				$id = $a["observation_id"];
				$time = $a["time_stamp"];
				$res = $a["numeric_value"];
				$phenomenon = $a["phenomenon_description"];
				$foi = $a["feature_of_interest_description"];
				$pos = trim($a["pos"], "POINT()");
				$proc = $a["description_type"];
						
		$this->startElementNS("om", "Observation", null);
            $this->writeAttributeNS("gml", "id", "http://www.opengis.net/gml/3.2", $id);
        $this->startElementNS("om", "type", null);
			$this->writeAttributeNS("xlink", "href", "http://www.w3.org/1999/xlink", "www.opengis.net/def/observationType/OGC_OM/2.0/OM_Measurement");
		$this->endElement();
		$this->startElementNS("om", "phenomenonTime", null);
			$this->startElementNS("om", "TimeInstant", null);
            	$this->writeElement("timePosition", $time);
			$this->endElement(); // end TimeInstant
		$this->endElement(); // end phenomenonTime
		$this->startElementNS("om", "procedure", null);
			$this->writeAttributeNS("xlink", "href", "http://www.w3.org/1999/xlink", $proc);
		$this->endElement();
		$this->startElementNS("om", "observedProperty", null);
			$this->writeAttributeNS("xlink", "href", "http://www.w3.org/1999/xlink", $phenomenon);
		$this->endElement();
		$this->startElementNS("om", "featureOfInterest", null);
			$this->writeAttributeNS("xlink", "href", "http://www.w3.org/1999/xlink", $foi);
			$this->startElementNS("gml", "Point", null);
				$this->writeElementNS("gml", "pos", null, $pos);
			$this->endElement();
		$this->endElement();
		$this->startElementNS("om", "result", null);
			$this->writeAttributeNS("xsi", "type", null, "gml:MeasureType");
			$this->writeAttribute("uom", null);
			$this->text($res);
		$this->endElement();
		$this->endElement(); // end Observation
		}
			pg_free_result($result);
			pg_close($dbconn);
    }
     
    public function __destruct()
    {										
		$this->endElement(); // end ObservationCollection
		$this->endDocument();
        $this->flush();
    }
} // end class

if ($_SERVER["REQUEST_METHOD"] == "GET" and $_GET["service"] == "SOS" and $_GET["version"] == "2.0" and $_GET["request"] == "GetObservation" and $_GET["responseFormat"] == "text/xml") {
header("Content-type: text/xml");
$w = new getObserv();
$w->__destruct();
}
?>