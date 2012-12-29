<?php
/* @var $this FeatureOfInterestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feature Of Interests',
);

$this->menu=array(
	array('label'=>'Create FeatureOfInterest', 'url'=>array('create')),
	array('label'=>'Manage FeatureOfInterest', 'url'=>array('admin')),
);
?>

<h1>Feature Of Interests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
