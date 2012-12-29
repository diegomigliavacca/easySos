<?php
/* @var $this DomainFeatureController */
/* @var $model DomainFeature */

$this->breadcrumbs=array(
	'Domain Features'=>array('index'),
	$model->domain_feature_id=>array('view','id'=>$model->domain_feature_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DomainFeature', 'url'=>array('index')),
	array('label'=>'Create DomainFeature', 'url'=>array('create')),
	array('label'=>'View DomainFeature', 'url'=>array('view', 'id'=>$model->domain_feature_id)),
	array('label'=>'Manage DomainFeature', 'url'=>array('admin')),
);
?>

<h1>Update DomainFeature <?php echo $model->domain_feature_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>