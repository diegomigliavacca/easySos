<?php
/* @var $this PhenomenonController */
/* @var $model Phenomenon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phenomenon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'phenomenon_id'); ?>
		<?php echo $form->textField($model,'phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phenomenon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phenomenon_description'); ?>
		<?php echo $form->textField($model,'phenomenon_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'phenomenon_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valuetype'); ?>
		<?php echo $form->textField($model,'valuetype',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'valuetype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'composite_phenomenon_id'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'composite_phenomenon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'om_application_schema_link'); ?>
		<?php echo $form->textArea($model,'om_application_schema_link',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'om_application_schema_link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->