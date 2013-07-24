<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $model RrbTempHnb */

$this->breadcrumbs=array(
	'Rrb Temp Hnbs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrbTempHnb', 'url'=>array('index')),
	array('label'=>'Create RrbTempHnb', 'url'=>array('create')),
	array('label'=>'Update RrbTempHnb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrbTempHnb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrbTempHnb', 'url'=>array('admin')),
);
?>

<h1>View RrbTempHnb #<?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_load',
		'hndb_name',
		'hndb_key',
		'hndb_key_value',
	),
)); ?>
