<?php
/* @var $this PhenomenonController */
/* @var $model Phenomenon */

$this->breadcrumbs=array(
	'Phenomenons'=>array('index'),
	$model->phenomenon_id,
);

$this->menu=array(
	array('label'=>'List Phenomenon', 'url'=>array('index')),
	array('label'=>'Create Phenomenon', 'url'=>array('create')),
	array('label'=>'Update Phenomenon', 'url'=>array('update', 'id'=>$model->phenomenon_id)),
	array('label'=>'Delete Phenomenon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->phenomenon_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phenomenon', 'url'=>array('admin')),
);
?>

<h1>View Phenomenon #<?php echo $model->phenomenon_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'phenomenon_id',
		'phenomenon_description',
		'unit',
		'valuetype',
		'composite_phenomenon_id',
		'om_application_schema_link',
	),
)); ?>
