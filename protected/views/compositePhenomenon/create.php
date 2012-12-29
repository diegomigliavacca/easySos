<?php
/* @var $this CompositePhenomenonController */
/* @var $model CompositePhenomenon */

$this->breadcrumbs=array(
	'Composite Phenomenons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompositePhenomenon', 'url'=>array('index')),
	array('label'=>'Manage CompositePhenomenon', 'url'=>array('admin')),
);
?>

<h1>Create CompositePhenomenon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>