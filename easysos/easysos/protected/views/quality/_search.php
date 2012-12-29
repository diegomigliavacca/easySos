<?php
/* @var $this QualityController */
/* @var $model Quality */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'quality_id'); ?>
		<?php echo $form->textField($model,'quality_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quality_name'); ?>
		<?php echo $form->textField($model,'quality_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quality_unit'); ?>
		<?php echo $form->textField($model,'quality_unit',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quality_value'); ?>
		<?php echo $form->textArea($model,'quality_value',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quality_type'); ?>
		<?php echo $form->textField($model,'quality_type',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_id'); ?>
		<?php echo $form->textField($model,'observation_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->