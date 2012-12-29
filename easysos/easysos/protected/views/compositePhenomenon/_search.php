<?php
/* @var $this CompositePhenomenonController */
/* @var $model CompositePhenomenon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'composite_phenomenon_id'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'composite_phenomenon_description'); ?>
		<?php echo $form->textField($model,'composite_phenomenon_description',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->