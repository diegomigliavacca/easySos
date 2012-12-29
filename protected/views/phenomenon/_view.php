<?php
/* @var $this PhenomenonController */
/* @var $data Phenomenon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('phenomenon_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phenomenon_id), array('view', 'id'=>$data->phenomenon_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phenomenon_description')); ?>:</b>
	<?php echo CHtml::encode($data->phenomenon_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valuetype')); ?>:</b>
	<?php echo CHtml::encode($data->valuetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('composite_phenomenon_id')); ?>:</b>
	<?php echo CHtml::encode($data->composite_phenomenon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('om_application_schema_link')); ?>:</b>
	<?php echo CHtml::encode($data->om_application_schema_link); ?>
	<br />


</div>