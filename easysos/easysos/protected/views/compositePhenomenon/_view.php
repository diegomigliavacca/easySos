<?php
/* @var $this CompositePhenomenonController */
/* @var $data CompositePhenomenon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('composite_phenomenon_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->composite_phenomenon_id), array('view', 'id'=>$data->composite_phenomenon_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('composite_phenomenon_description')); ?>:</b>
	<?php echo CHtml::encode($data->composite_phenomenon_description); ?>
	<br />


</div>