<?php
/* @var $this QualityController */
/* @var $data Quality */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->quality_id), array('view', 'id'=>$data->quality_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality_name')); ?>:</b>
	<?php echo CHtml::encode($data->quality_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality_unit')); ?>:</b>
	<?php echo CHtml::encode($data->quality_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality_value')); ?>:</b>
	<?php echo CHtml::encode($data->quality_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality_type')); ?>:</b>
	<?php echo CHtml::encode($data->quality_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_id')); ?>:</b>
	<?php echo CHtml::encode($data->observation_id); ?>
	<br />


</div>