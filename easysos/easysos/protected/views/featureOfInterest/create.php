<?php
/* @var $this FeatureOfInterestController */
/* @var $model FeatureOfInterest */

$this->breadcrumbs=array(
	'Feature Of Interests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FeatureOfInterest', 'url'=>array('index')),
	array('label'=>'Manage FeatureOfInterest', 'url'=>array('admin')),
);
?>

<h1>Create FeatureOfInterest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>