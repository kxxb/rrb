<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $model RrbTemporaryLoad */

$this->breadcrumbs=array(
	'Rrb Temporary Loads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrbTemporaryLoad', 'url'=>array('index')),
	array('label'=>'Create RrbTemporaryLoad', 'url'=>array('create')),
	array('label'=>'View RrbTemporaryLoad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrbTemporaryLoad', 'url'=>array('admin')),
);
?>

<h1>Update RrbTemporaryLoad <?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>