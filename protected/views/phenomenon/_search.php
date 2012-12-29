<?php
/* @var $this PhenomenonController */
/* @var $model Phenomenon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'phenomenon_id'); ?>
		<?php echo $form->textField($model,'phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phenomenon_description'); ?>
		<?php echo $form->textField($model,'phenomenon_description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valuetype'); ?>
		<?php echo $form->textField($model,'valuetype',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'composite_phenomenon_id'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'om_application_schema_link'); ?>
		<?php echo $form->textArea($model,'om_application_schema_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->