<?php
/* @var $this OfferingController */
/* @var $model Offering */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'offering-form',
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
		<?php echo $form->labelEx($model,'offering_name'); ?>
		<?php echo $form->textField($model,'offering_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'offering_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_time'); ?>
		<?php echo $form->textField($model,'min_time'); ?>
		<?php echo $form->error($model,'min_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_time'); ?>
		<?php echo $form->textField($model,'max_time'); ?>
		<?php echo $form->error($model,'max_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->