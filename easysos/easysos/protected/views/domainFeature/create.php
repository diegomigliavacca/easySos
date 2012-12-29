<?php
/* @var $this DomainFeatureController */
/* @var $model DomainFeature */

$this->breadcrumbs=array(
	'Domain Features'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DomainFeature', 'url'=>array('index')),
	array('label'=>'Manage DomainFeature', 'url'=>array('admin')),
);
?>

<h1>Create DomainFeature</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>