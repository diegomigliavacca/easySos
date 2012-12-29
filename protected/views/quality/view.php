<?php
/* @var $this QualityController */
/* @var $model Quality */

$this->breadcrumbs=array(
	'Qualities'=>array('index'),
	$model->quality_id,
);

$this->menu=array(
	array('label'=>'List Quality', 'url'=>array('index')),
	array('label'=>'Create Quality', 'url'=>array('create')),
	array('label'=>'Update Quality', 'url'=>array('update', 'id'=>$model->quality_id)),
	array('label'=>'Delete Quality', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->quality_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quality', 'url'=>array('admin')),
);
?>

<h1>View Quality #<?php echo $model->quality_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'quality_id',
		'quality_name',
		'quality_unit',
		'quality_value',
		'quality_type',
		'observation_id',
	),
)); ?>
