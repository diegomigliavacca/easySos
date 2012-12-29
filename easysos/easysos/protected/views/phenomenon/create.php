<?php
/* @var $this PhenomenonController */
/* @var $model Phenomenon */

$this->breadcrumbs=array(
	'Phenomenons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phenomenon', 'url'=>array('index')),
	array('label'=>'Manage Phenomenon', 'url'=>array('admin')),
);
?>

<h1>Create Phenomenon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>