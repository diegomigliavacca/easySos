<?php
/* @var $this SpatialRefSysController */
/* @var $model SpatialRefSys */

$this->breadcrumbs=array(
	'Spatial Ref Sys'=>array('index'),
	$model->srid=>array('view','id'=>$model->srid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpatialRefSys', 'url'=>array('index')),
	array('label'=>'Create SpatialRefSys', 'url'=>array('create')),
	array('label'=>'View SpatialRefSys', 'url'=>array('view', 'id'=>$model->srid)),
	array('label'=>'Manage SpatialRefSys', 'url'=>array('admin')),
);
?>

<h1>Update SpatialRefSys <?php echo $model->srid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>