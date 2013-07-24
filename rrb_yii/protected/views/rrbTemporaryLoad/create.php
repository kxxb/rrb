<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $model RrbTemporaryLoad */

$this->breadcrumbs=array(
	'Rrb Temporary Loads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrbTemporaryLoad', 'url'=>array('index')),
	array('label'=>'Manage RrbTemporaryLoad', 'url'=>array('admin')),
);
?>

<h1>Create RrbTemporaryLoad</h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>