<?php
/* @var $this SpatialRefSysController */
/* @var $model SpatialRefSys */

$this->breadcrumbs=array(
	'Spatial Ref Sys'=>array('index'),
	$model->srid,
);

$this->menu=array(
	array('label'=>'List SpatialRefSys', 'url'=>array('index')),
	array('label'=>'Create SpatialRefSys', 'url'=>array('create')),
	array('label'=>'Update SpatialRefSys', 'url'=>array('update', 'id'=>$model->srid)),
	array('label'=>'Delete SpatialRefSys', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->srid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpatialRefSys', 'url'=>array('admin')),
);
?>

<h1>View SpatialRefSys #<?php echo $model->srid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'srid',
		'auth_name',
		'auth_srid',
		'srtext',
		'proj4text',
	),
)); ?>
