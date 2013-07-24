<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $model RrbTempHnb */

$this->breadcrumbs=array(
	'Rrb Temp Hnbs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrbTempHnb', 'url'=>array('index')),
	array('label'=>'Create RrbTempHnb', 'url'=>array('create')),
	array('label'=>'View RrbTempHnb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrbTempHnb', 'url'=>array('admin')),
);
?>

<h1>Update RrbTempHnb <?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>