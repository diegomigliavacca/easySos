<?php
/* @var $this CompositePhenomenonController */
/* @var $model CompositePhenomenon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'composite-phenomenon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'composite_phenomenon_id'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'composite_phenomenon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'composite_phenomenon_description'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_description',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'composite_phenomenon_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->