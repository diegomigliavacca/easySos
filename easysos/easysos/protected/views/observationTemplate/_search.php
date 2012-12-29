<?php
/* @var $this ObservationTemplateController */
/* @var $model ObservationTemplate */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'obs_template_id'); ?>
		<?php echo $form->textField($model,'obs_template_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'procedure_id'); ?>
		<?php echo $form->textField($model,'procedure_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_template'); ?>
		<?php echo $form->textArea($model,'observation_template',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->