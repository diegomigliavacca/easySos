<?php
/* @var $this ObservationTemplateController */
/* @var $model ObservationTemplate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observation-template-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'procedure_id'); ?>
		<?php echo $form->textField($model,'procedure_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'procedure_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
		<?php echo $form->error($model,'request_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_template'); ?>
		<?php echo $form->textArea($model,'observation_template',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observation_template'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->