<?php
/* @var $this CompositePhenomenonController */
/* @var $model CompositePhenomenon */

$this->breadcrumbs=array(
	'Composite Phenomenons'=>array('index'),
	$model->composite_phenomenon_id,
);

$this->menu=array(
	array('label'=>'List CompositePhenomenon', 'url'=>array('index')),
	array('label'=>'Create CompositePhenomenon', 'url'=>array('create')),
	array('label'=>'Update CompositePhenomenon', 'url'=>array('update', 'id'=>$model->composite_phenomenon_id)),
	array('label'=>'Delete CompositePhenomenon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->composite_phenomenon_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompositePhenomenon', 'url'=>array('admin')),
);
?>

<h1>View CompositePhenomenon #<?php echo $model->composite_phenomenon_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'composite_phenomenon_id',
		'composite_phenomenon_description',
	),
)); ?>
