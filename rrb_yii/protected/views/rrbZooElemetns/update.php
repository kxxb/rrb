<?php
/* @var $this RrbZooElemetnsController */
/* @var $model RrbZooElemetns */

$this->breadcrumbs=array(
	'Rrb Zoo Elemetns'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrbZooElemetns', 'url'=>array('index')),
	array('label'=>'Create RrbZooElemetns', 'url'=>array('create')),
	array('label'=>'View RrbZooElemetns', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrbZooElemetns', 'url'=>array('admin')),
);
?>

<h1>Update RrbZooElemetns <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>