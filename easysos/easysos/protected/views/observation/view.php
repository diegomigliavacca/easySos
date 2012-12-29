<?php
/* @var $this ObservationController */
/* @var $model Observation */

$this->breadcrumbs=array(
	'Observations'=>array('index'),
	$model->observation_id,
);

$this->menu=array(
	array('label'=>'List Observation', 'url'=>array('index')),
	array('label'=>'Create Observation', 'url'=>array('create')),
	array('label'=>'Update Observation', 'url'=>array('update', 'id'=>$model->observation_id)),
	array('label'=>'Delete Observation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->observation_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Observation', 'url'=>array('admin')),
);
?>

<h1>View Observation #<?php echo $model->observation_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'time_stamp',
		'procedure_id',
		'feature_of_interest_id',
		'phenomenon_id',
		'offering_id',
		'text_value',
		'numeric_value',
		'spatial_value',
		'mime_type',
		'observation_id',
	),
)); ?>
