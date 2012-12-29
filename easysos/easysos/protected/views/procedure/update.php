<?php
/* @var $this ProcedureController */
/* @var $model Procedure */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	$model->procedure_id=>array('view','id'=>$model->procedure_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Procedure', 'url'=>array('index')),
	array('label'=>'Create Procedure', 'url'=>array('create')),
	array('label'=>'View Procedure', 'url'=>array('view', 'id'=>$model->procedure_id)),
	array('label'=>'Manage Procedure', 'url'=>array('admin')),
);
?>

<h1>Update Procedure <?php echo $model->procedure_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>