<?php
/* @var $this SpatialRefSysController */
/* @var $model SpatialRefSys */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'spatial-ref-sys-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'srid'); ?>
		<?php echo $form->textField($model,'srid'); ?>
		<?php echo $form->error($model,'srid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auth_name'); ?>
		<?php echo $form->textField($model,'auth_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'auth_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auth_srid'); ?>
		<?php echo $form->textField($model,'auth_srid'); ?>
		<?php echo $form->error($model,'auth_srid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'srtext'); ?>
		<?php echo $form->textField($model,'srtext',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'srtext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proj4text'); ?>
		<?php echo $form->textField($model,'proj4text',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'proj4text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->