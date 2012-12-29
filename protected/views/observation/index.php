<?php
/* @var $this ObservationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Observations',
);

$this->menu=array(
	array('label'=>'Create Observation', 'url'=>array('create')),
	array('label'=>'Manage Observation', 'url'=>array('admin')),
);
?>

<h1>Observations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
