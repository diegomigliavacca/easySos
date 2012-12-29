<?php
/* @var $this QualityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Qualities',
);

$this->menu=array(
	array('label'=>'Create Quality', 'url'=>array('create')),
	array('label'=>'Manage Quality', 'url'=>array('admin')),
);
?>

<h1>Qualities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
