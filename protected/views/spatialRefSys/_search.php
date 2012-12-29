<?php
/* @var $this SpatialRefSysController */
/* @var $model SpatialRefSys */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'srid'); ?>
		<?php echo $form->textField($model,'srid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auth_name'); ?>
		<?php echo $form->textField($model,'auth_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auth_srid'); ?>
		<?php echo $form->textField($model,'auth_srid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srtext'); ?>
		<?php echo $form->textField($model,'srtext',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proj4text'); ?>
		<?php echo $form->textField($model,'proj4text',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->