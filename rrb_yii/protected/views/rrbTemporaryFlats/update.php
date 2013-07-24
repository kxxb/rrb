<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */

$this->breadcrumbs=array(
	'Rrb Temporary Flats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrbTemporaryFlats', 'url'=>array('index')),
	array('label'=>'Create RrbTemporaryFlats', 'url'=>array('create')),
	array('label'=>'View RrbTemporaryFlats', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrbTemporaryFlats', 'url'=>array('admin')),
);
?>

<h1>Update RrbTemporaryFlats <?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>