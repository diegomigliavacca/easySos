<?php
/* @var $this DomainFeatureController */
/* @var $data DomainFeature */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('domain_feature_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->domain_feature_id), array('view', 'id'=>$data->domain_feature_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domain_feature_name')); ?>:</b>
	<?php echo CHtml::encode($data->domain_feature_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domain_feature_description')); ?>:</b>
	<?php echo CHtml::encode($data->domain_feature_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geom')); ?>:</b>
	<?php echo CHtml::encode($data->geom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_type')); ?>:</b>
	<?php echo CHtml::encode($data->feature_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schema_link')); ?>:</b>
	<?php echo CHtml::encode($data->schema_link); ?>
	<br />


</div>