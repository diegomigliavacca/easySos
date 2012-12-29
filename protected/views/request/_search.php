<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offering_id'); ?>
		<?php echo $form->textField($model,'offering_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request'); ?>
		<?php echo $form->textArea($model,'request',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'begin_lease'); ?>
		<?php echo $form->textField($model,'begin_lease'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_lease'); ?>
		<?php echo $form->textField($model,'end_lease'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->