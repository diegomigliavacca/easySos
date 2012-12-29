<?php
/* @var $this QualityController */
/* @var $model Quality */

$this->breadcrumbs=array(
	'Qualities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Quality', 'url'=>array('index')),
	array('label'=>'Manage Quality', 'url'=>array('admin')),
);
?>

<h1>Create Quality</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>