<?php
/* @var $this ObservationTemplateController */
/* @var $data ObservationTemplate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obs_template_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obs_template_id), array('view', 'id'=>$data->obs_template_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procedure_id')); ?>:</b>
	<?php echo CHtml::encode($data->procedure_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::encode($data->request_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_template')); ?>:</b>
	<?php echo CHtml::encode($data->observation_template); ?>
	<br />


</div>