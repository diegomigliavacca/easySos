<?php
/* @var $this DomainFeatureController */
/* @var $model DomainFeature */

$this->breadcrumbs=array(
	'Domain Features'=>array('index'),
	$model->domain_feature_id,
);

$this->menu=array(
	array('label'=>'List DomainFeature', 'url'=>array('index')),
	array('label'=>'Create DomainFeature', 'url'=>array('create')),
	array('label'=>'Update DomainFeature', 'url'=>array('update', 'id'=>$model->domain_feature_id)),
	array('label'=>'Delete DomainFeature', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->domain_feature_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DomainFeature', 'url'=>array('admin')),
);
?>

<h1>View DomainFeature #<?php echo $model->domain_feature_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'domain_feature_id',
		'domain_feature_name',
		'domain_feature_description',
		'geom',
		'feature_type',
		'schema_link',
	),
)); ?>
