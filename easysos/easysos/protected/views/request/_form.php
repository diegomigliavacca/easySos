<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'offering_id'); ?>
		<?php echo $form->textField($model,'offering_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'offering_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request'); ?>
		<?php echo $form->textArea($model,'request',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'request'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begin_lease'); ?>
		<?php echo $form->textField($model,'begin_lease'); ?>
		<?php echo $form->error($model,'begin_lease'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_lease'); ?>
		<?php echo $form->textField($model,'end_lease'); ?>
		<?php echo $form->error($model,'end_lease'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->