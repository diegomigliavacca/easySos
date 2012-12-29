<?php
/* @var $this ObservationController */
/* @var $data Observation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->observation_id), array('view', 'id'=>$data->observation_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_stamp')); ?>:</b>
	<?php echo CHtml::encode($data->time_stamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procedure_id')); ?>:</b>
	<?php echo CHtml::encode($data->procedure_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_of_interest_id')); ?>:</b>
	<?php echo CHtml::encode($data->feature_of_interest_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phenomenon_id')); ?>:</b>
	<?php echo CHtml::encode($data->phenomenon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offering_id')); ?>:</b>
	<?php echo CHtml::encode($data->offering_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_value')); ?>:</b>
	<?php echo CHtml::encode($data->text_value); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numeric_value')); ?>:</b>
	<?php echo CHtml::encode($data->numeric_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spatial_value')); ?>:</b>
	<?php echo CHtml::encode($data->spatial_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mime_type')); ?>:</b>
	<?php echo CHtml::encode($data->mime_type); ?>
	<br />

	*/ ?>

</div>