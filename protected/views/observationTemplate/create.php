<?php
/* @var $this ObservationTemplateController */
/* @var $model ObservationTemplate */

$this->breadcrumbs=array(
	'Observation Templates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservationTemplate', 'url'=>array('index')),
	array('label'=>'Manage ObservationTemplate', 'url'=>array('admin')),
);
?>

<h1>Create ObservationTemplate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>