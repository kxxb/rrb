<?php
/* @var $this RrbZooElemetnsController */
/* @var $model RrbZooElemetns */

$this->breadcrumbs=array(
	'Rrb Zoo Elemetns'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrbZooElemetns', 'url'=>array('index')),
	array('label'=>'Create RrbZooElemetns', 'url'=>array('create')),
	array('label'=>'Update RrbZooElemetns', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrbZooElemetns', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrbZooElemetns', 'url'=>array('admin')),
);
?>

<h1>View RrbZooElemetns #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type_name',
		'element_id',
		'element_name',
		'rrb_table',
		'rrb_field',
                'rrb_replace_var',
	),
)); ?>
