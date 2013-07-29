<?php
/* @var $this ObservationController */
/* @var $model Observation */

$this->breadcrumbs=array(
	'Observations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Observation', 'url'=>array('index')),
	array('label'=>'Create Observation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#observation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Observations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'time_stamp',
		'procedure_id',
		'feature_of_interest_id',
		'phenomenon_id',
		'offering_id',
		'text_value',
		/*
		'numeric_value',
		'spatial_value',
		'mime_type',
		'observation_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
