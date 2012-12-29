<?php
/* @var $this SpatialRefSysController */
/* @var $model SpatialRefSys */

$this->breadcrumbs=array(
	'Spatial Ref Sys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpatialRefSys', 'url'=>array('index')),
	array('label'=>'Manage SpatialRefSys', 'url'=>array('admin')),
);
?>

<h1>Create SpatialRefSys</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>