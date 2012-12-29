<?php
/* @var $this OfferingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offerings',
);

$this->menu=array(
	array('label'=>'Create Offering', 'url'=>array('create')),
	array('label'=>'Manage Offering', 'url'=>array('admin')),
);
?>

<h1>Offerings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
