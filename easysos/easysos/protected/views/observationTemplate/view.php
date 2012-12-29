<?php
/* @var $this ObservationTemplateController */
/* @var $model ObservationTemplate */

$this->breadcrumbs=array(
	'Observation Templates'=>array('index'),
	$model->obs_template_id,
);

$this->menu=array(
	array('label'=>'List ObservationTemplate', 'url'=>array('index')),
	array('label'=>'Create ObservationTemplate', 'url'=>array('create')),
	array('label'=>'Update ObservationTemplate', 'url'=>array('update', 'id'=>$model->obs_template_id)),
	array('label'=>'Delete ObservationTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obs_template_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservationTemplate', 'url'=>array('admin')),
);
?>

<h1>View ObservationTemplate #<?php echo $model->obs_template_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'obs_template_id',
		'procedure_id',
		'request_id',
		'observation_template',
	),
)); ?>
