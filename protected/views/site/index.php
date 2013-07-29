<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
<br />
<p>
<a href="http://localhost/easysos/index.php?r=Observation">Observation</a><br />
<a href="http://localhost/easysos/index.php?r=FeatureOfInterest">Feature Of Interest</a><br />
<a href="http://localhost/easysos/index.php?r=Phenomenon">Phenomenon</a><br />
<a href="http://localhost/easysos/index.php?r=Procedure">Procedure</a><br />
<a href="http://localhost/easysos/index.php?r=Offering">Offering</a><br />
<br /><br />
</p>
<p>
<a href="http://localhost/easysos/service/get.php?service=SOS&version=1.0.0&request=GetObservation&responseFormat=text/xml" target="_blank">GetObservation</a>
</p>

<p>For more details on how to further develop this application, please read
the <a href="https://github.com/diegomigliavacca">documentation</a>.
Feel free to ask in the <a href="http://diegomigliavacca.wordpress.com">blog</a>,
should you have any questions.</p>