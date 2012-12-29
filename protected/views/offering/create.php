<?php
/* @var $this OfferingController */
/* @var $model Offering */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Offering', 'url'=>array('index')),
	array('label'=>'Manage Offering', 'url'=>array('admin')),
);
?>

<h1>Create Offering</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>