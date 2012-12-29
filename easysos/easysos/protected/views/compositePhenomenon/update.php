<?php
/* @var $this CompositePhenomenonController */
/* @var $model CompositePhenomenon */

$this->breadcrumbs=array(
	'Composite Phenomenons'=>array('index'),
	$model->composite_phenomenon_id=>array('view','id'=>$model->composite_phenomenon_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompositePhenomenon', 'url'=>array('index')),
	array('label'=>'Create CompositePhenomenon', 'url'=>array('create')),
	array('label'=>'View CompositePhenomenon', 'url'=>array('view', 'id'=>$model->composite_phenomenon_id)),
	array('label'=>'Manage CompositePhenomenon', 'url'=>array('admin')),
);
?>

<h1>Update CompositePhenomenon <?php echo $model->composite_phenomenon_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>