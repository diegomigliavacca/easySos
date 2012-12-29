<?php
/* @var $this FeatureOfInterestController */
/* @var $model FeatureOfInterest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'feature_of_interest_id'); ?>
		<?php echo $form->textField($model,'feature_of_interest_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feature_of_interest_name'); ?>
		<?php echo $form->textField($model,'feature_of_interest_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feature_of_interest_description'); ?>
		<?php echo $form->textField($model,'feature_of_interest_description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'geom'); ?>
		<?php echo $form->textField($model,'geom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feature_type'); ?>
		<?php echo $form->textArea($model,'feature_type',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schema_link'); ?>
		<?php echo $form->textArea($model,'schema_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->