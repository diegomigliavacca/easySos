<?php
/* @var $this DomainFeatureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Domain Features',
);

$this->menu=array(
	array('label'=>'Create DomainFeature', 'url'=>array('create')),
	array('label'=>'Manage DomainFeature', 'url'=>array('admin')),
);
?>

<h1>Domain Features</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
