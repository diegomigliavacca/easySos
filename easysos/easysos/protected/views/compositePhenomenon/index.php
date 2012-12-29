<?php
/* @var $this CompositePhenomenonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Composite Phenomenons',
);

$this->menu=array(
	array('label'=>'Create CompositePhenomenon', 'url'=>array('create')),
	array('label'=>'Manage CompositePhenomenon', 'url'=>array('admin')),
);
?>

<h1>Composite Phenomenons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
