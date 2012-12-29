<?php
/* @var $this ProcedureController */
/* @var $model Procedure */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Procedure', 'url'=>array('index')),
	array('label'=>'Manage Procedure', 'url'=>array('admin')),
);
?>

<h1>Create Procedure</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>