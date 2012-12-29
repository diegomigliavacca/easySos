<?php
/* @var $this ObservationController */
/* @var $model Observation */

$this->breadcrumbs=array(
	'Observations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Observation', 'url'=>array('index')),
	array('label'=>'Manage Observation', 'url'=>array('admin')),
);
?>

<h1>Create Observation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>