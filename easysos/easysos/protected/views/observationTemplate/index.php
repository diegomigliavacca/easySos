<?php
/* @var $this ObservationTemplateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Observation Templates',
);

$this->menu=array(
	array('label'=>'Create ObservationTemplate', 'url'=>array('create')),
	array('label'=>'Manage ObservationTemplate', 'url'=>array('admin')),
);
?>

<h1>Observation Templates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
