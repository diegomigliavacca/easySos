<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->request_id), array('view', 'id'=>$data->request_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offering_id')); ?>:</b>
	<?php echo CHtml::encode($data->offering_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request')); ?>:</b>
	<?php echo CHtml::encode($data->request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('begin_lease')); ?>:</b>
	<?php echo CHtml::encode($data->begin_lease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_lease')); ?>:</b>
	<?php echo CHtml::encode($data->end_lease); ?>
	<br />


</div>