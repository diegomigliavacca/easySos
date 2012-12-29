<?php
/* @var $this OfferingController */
/* @var $model Offering */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	$model->offering_id,
);

$this->menu=array(
	array('label'=>'List Offering', 'url'=>array('index')),
	array('label'=>'Create Offering', 'url'=>array('create')),
	array('label'=>'Update Offering', 'url'=>array('update', 'id'=>$model->offering_id)),
	array('label'=>'Delete Offering', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->offering_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Offering', 'url'=>array('admin')),
);
?>

<h1>View Offering #<?php echo $model->offering_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'offering_id',
		'offering_name',
		'min_time',
		'max_time',
	),
)); ?>
