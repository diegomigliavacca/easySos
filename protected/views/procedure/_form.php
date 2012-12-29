<?php
/* @var $this ProcedureController */
/* @var $model Procedure */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'procedure-form',
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
		<?php echo $form->labelEx($model,'description_url'); ?>
		<?php echo $form->textField($model,'description_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_type'); ?>
		<?php echo $form->textField($model,'description_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'description_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sml_file'); ?>
		<?php echo $form->textArea($model,'sml_file',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sml_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actual_position'); ?>
		<?php echo $form->textField($model,'actual_position'); ?>
		<?php echo $form->error($model,'actual_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->checkBox($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->