<?php
/* @var $this PhenomenonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phenomenons',
);

$this->menu=array(
	array('label'=>'Create Phenomenon', 'url'=>array('create')),
	array('label'=>'Manage Phenomenon', 'url'=>array('admin')),
);
?>

<h1>Phenomenons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
