<?php
/* @var $this OfferingController */
/* @var $data Offering */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('offering_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->offering_id), array('view', 'id'=>$data->offering_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offering_name')); ?>:</b>
	<?php echo CHtml::encode($data->offering_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_time')); ?>:</b>
	<?php echo CHtml::encode($data->min_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_time')); ?>:</b>
	<?php echo CHtml::encode($data->max_time); ?>
	<br />


</div>