<?php
/* @var $this QualityController */
/* @var $model Quality */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quality-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'quality_name'); ?>
		<?php echo $form->textField($model,'quality_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'quality_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality_unit'); ?>
		<?php echo $form->textField($model,'quality_unit',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'quality_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality_value'); ?>
		<?php echo $form->textArea($model,'quality_value',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'quality_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality_type'); ?>
		<?php echo $form->textField($model,'quality_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'quality_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_id'); ?>
		<?php echo $form->textField($model,'observation_id'); ?>
		<?php echo $form->error($model,'observation_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->