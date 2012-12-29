<?php
/* @var $this ProcedureController */
/* @var $data Procedure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('procedure_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->procedure_id), array('view', 'id'=>$data->procedure_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_url')); ?>:</b>
	<?php echo CHtml::encode($data->description_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_type')); ?>:</b>
	<?php echo CHtml::encode($data->description_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sml_file')); ?>:</b>
	<?php echo CHtml::encode($data->sml_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_position')); ?>:</b>
	<?php echo CHtml::encode($data->actual_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />


</div>