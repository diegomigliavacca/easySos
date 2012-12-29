<?php
/* @var $this OfferingController */
/* @var $model Offering */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	$model->offering_id=>array('view','id'=>$model->offering_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Offering', 'url'=>array('index')),
	array('label'=>'Create Offering', 'url'=>array('create')),
	array('label'=>'View Offering', 'url'=>array('view', 'id'=>$model->offering_id)),
	array('label'=>'Manage Offering', 'url'=>array('admin')),
);
?>

<h1>Update Offering <?php echo $model->offering_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>