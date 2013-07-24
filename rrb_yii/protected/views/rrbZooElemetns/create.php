<?php
/* @var $this RrbZooElemetnsController */
/* @var $model RrbZooElemetns */

$this->breadcrumbs=array(
	'Rrb Zoo Elemetns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrbZooElemetns', 'url'=>array('index')),
	array('label'=>'Manage RrbZooElemetns', 'url'=>array('admin')),
);
?>

<h1>Create RrbZooElemetns</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>