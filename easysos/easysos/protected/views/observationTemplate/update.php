<?php
/* @var $this ObservationTemplateController */
/* @var $model ObservationTemplate */

$this->breadcrumbs=array(
	'Observation Templates'=>array('index'),
	$model->obs_template_id=>array('view','id'=>$model->obs_template_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservationTemplate', 'url'=>array('index')),
	array('label'=>'Create ObservationTemplate', 'url'=>array('create')),
	array('label'=>'View ObservationTemplate', 'url'=>array('view', 'id'=>$model->obs_template_id)),
	array('label'=>'Manage ObservationTemplate', 'url'=>array('admin')),
);
?>

<h1>Update ObservationTemplate <?php echo $model->obs_template_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>