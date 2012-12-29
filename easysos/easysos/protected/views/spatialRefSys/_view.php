<?php
/* @var $this SpatialRefSysController */
/* @var $data SpatialRefSys */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('srid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->srid), array('view', 'id'=>$data->srid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_name')); ?>:</b>
	<?php echo CHtml::encode($data->auth_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_srid')); ?>:</b>
	<?php echo CHtml::encode($data->auth_srid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('srtext')); ?>:</b>
	<?php echo CHtml::encode($data->srtext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proj4text')); ?>:</b>
	<?php echo CHtml::encode($data->proj4text); ?>
	<br />


</div>