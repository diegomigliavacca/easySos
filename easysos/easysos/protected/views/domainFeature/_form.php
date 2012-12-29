<?php
/* @var $this DomainFeatureController */
/* @var $model DomainFeature */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'domain-feature-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'domain_feature_id'); ?>
		<?php echo $form->textField($model,'domain_feature_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'domain_feature_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domain_feature_name'); ?>
		<?php echo $form->textField($model,'domain_feature_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'domain_feature_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domain_feature_description'); ?>
		<?php echo $form->textField($model,'domain_feature_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'domain_feature_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'geom'); ?>
		<?php echo $form->textField($model,'geom'); ?>
		<?php echo $form->error($model,'geom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feature_type'); ?>
		<?php echo $form->textArea($model,'feature_type',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'feature_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schema_link'); ?>
		<?php echo $form->textArea($model,'schema_link',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'schema_link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->