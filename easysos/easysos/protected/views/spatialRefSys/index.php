<?php
/* @var $this SpatialRefSysController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spatial Ref Sys',
);

$this->menu=array(
	array('label'=>'Create SpatialRefSys', 'url'=>array('create')),
	array('label'=>'Manage SpatialRefSys', 'url'=>array('admin')),
);
?>

<h1>Spatial Ref Sys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
