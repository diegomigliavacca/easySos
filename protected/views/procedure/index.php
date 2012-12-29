<?php
/* @var $this ProcedureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Procedures',
);

$this->menu=array(
	array('label'=>'Create Procedure', 'url'=>array('create')),
	array('label'=>'Manage Procedure', 'url'=>array('admin')),
);
?>

<h1>Procedures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
