<?php
/* @var $this ObservationController */
/* @var $model Observation */

$this->breadcrumbs=array(
	'Observations'=>array('index'),
	$model->observation_id=>array('view','id'=>$model->observation_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Observation', 'url'=>array('index')),
	array('label'=>'Create Observation', 'url'=>array('create')),
	array('label'=>'View Observation', 'url'=>array('view', 'id'=>$model->observation_id)),
	array('label'=>'Manage Observation', 'url'=>array('admin')),
);
?>

<h1>Update Observation <?php echo $model->observation_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>