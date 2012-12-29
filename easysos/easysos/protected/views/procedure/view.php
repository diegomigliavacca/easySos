<?php
/* @var $this ProcedureController */
/* @var $model Procedure */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	$model->procedure_id,
);

$this->menu=array(
	array('label'=>'List Procedure', 'url'=>array('index')),
	array('label'=>'Create Procedure', 'url'=>array('create')),
	array('label'=>'Update Procedure', 'url'=>array('update', 'id'=>$model->procedure_id)),
	array('label'=>'Delete Procedure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->procedure_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Procedure', 'url'=>array('admin')),
);
?>

<h1>View Procedure #<?php echo $model->procedure_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'procedure_id',
		'description_url',
		'description_type',
		'sml_file',
		'actual_position',
		'active',
		'mobile',
	),
)); ?>
