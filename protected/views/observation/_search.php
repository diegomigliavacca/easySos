<?php
/* @var $this ObservationController */
/* @var $model Observation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'time_stamp'); ?>
		<?php echo $form->textField($model,'time_stamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'procedure_id'); ?>
		<?php echo $form->textField($model,'procedure_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feature_of_interest_id'); ?>
		<?php echo $form->textField($model,'feature_of_interest_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phenomenon_id'); ?>
		<?php echo $form->textField($model,'phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offering_id'); ?>
		<?php echo $form->textField($model,'offering_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_value'); ?>
		<?php echo $form->textArea($model,'text_value',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeric_value'); ?>
		<?php echo $form->textField($model,'numeric_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spatial_value'); ?>
		<?php echo $form->textField($model,'spatial_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mime_type'); ?>
		<?php echo $form->textField($model,'mime_type',array('size'=>60,'maxlength'=>100)); ?>
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