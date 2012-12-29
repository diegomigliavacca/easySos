<?php
/* @var $this FeatureOfInterestController */
/* @var $data FeatureOfInterest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_of_interest_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feature_of_interest_id), array('view', 'id'=>$data->feature_of_interest_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_of_interest_name')); ?>:</b>
	<?php echo CHtml::encode($data->feature_of_interest_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_of_interest_description')); ?>:</b>
	<?php echo CHtml::encode($data->feature_of_interest_description); ?>
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