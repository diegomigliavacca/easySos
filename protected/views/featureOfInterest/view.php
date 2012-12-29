<?php
/* @var $this FeatureOfInterestController */
/* @var $model FeatureOfInterest */

$this->breadcrumbs=array(
	'Feature Of Interests'=>array('index'),
	$model->feature_of_interest_id,
);

$this->menu=array(
	array('label'=>'List FeatureOfInterest', 'url'=>array('index')),
	array('label'=>'Create FeatureOfInterest', 'url'=>array('create')),
	array('label'=>'Update FeatureOfInterest', 'url'=>array('update', 'id'=>$model->feature_of_interest_id)),
	array('label'=>'Delete FeatureOfInterest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feature_of_interest_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeatureOfInterest', 'url'=>array('admin')),
);
?>

<h1>View FeatureOfInterest #<?php echo $model->feature_of_interest_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feature_of_interest_id',
		'feature_of_interest_name',
		'feature_of_interest_description',
		'geom',
		'feature_type',
		'schema_link',
	),
)); ?>
