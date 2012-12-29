<?php
/* @var $this PhenomenonController */
/* @var $model Phenomenon */

$this->breadcrumbs=array(
	'Phenomenons'=>array('index'),
	$model->phenomenon_id=>array('view','id'=>$model->phenomenon_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Phenomenon', 'url'=>array('index')),
	array('label'=>'Create Phenomenon', 'url'=>array('create')),
	array('label'=>'View Phenomenon', 'url'=>array('view', 'id'=>$model->phenomenon_id)),
	array('label'=>'Manage Phenomenon', 'url'=>array('admin')),
);
?>

<h1>Update Phenomenon <?php echo $model->phenomenon_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>