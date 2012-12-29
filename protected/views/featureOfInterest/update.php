<?php
/* @var $this FeatureOfInterestController */
/* @var $model FeatureOfInterest */

$this->breadcrumbs=array(
	'Feature Of Interests'=>array('index'),
	$model->feature_of_interest_id=>array('view','id'=>$model->feature_of_interest_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FeatureOfInterest', 'url'=>array('index')),
	array('label'=>'Create FeatureOfInterest', 'url'=>array('create')),
	array('label'=>'View FeatureOfInterest', 'url'=>array('view', 'id'=>$model->feature_of_interest_id)),
	array('label'=>'Manage FeatureOfInterest', 'url'=>array('admin')),
);
?>

<h1>Update FeatureOfInterest <?php echo $model->feature_of_interest_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>