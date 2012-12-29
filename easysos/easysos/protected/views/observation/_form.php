<?php
/* @var $this ObservationController */
/* @var $model Observation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'time_stamp'); ?>
		<?php echo $form->textField($model,'time_stamp'); ?>
		<?php echo $form->error($model,'time_stamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'procedure_id'); ?>
		<?php echo $form->textField($model,'procedure_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'procedure_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feature_of_interest_id'); ?>
		<?php echo $form->textField($model,'feature_of_interest_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'feature_of_interest_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phenomenon_id'); ?>
		<?php echo $form->textField($model,'phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phenomenon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offering_id'); ?>
		<?php echo $form->textField($model,'offering_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'offering_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_value'); ?>
		<?php echo $form->textArea($model,'text_value',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeric_value'); ?>
		<?php echo $form->textField($model,'numeric_value'); ?>
		<?php echo $form->error($model,'numeric_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spatial_value'); ?>
		<?php echo $form->textField($model,'spatial_value'); ?>
		<?php echo $form->error($model,'spatial_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mime_type'); ?>
		<?php echo $form->textField($model,'mime_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mime_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->