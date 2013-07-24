<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */

$this->breadcrumbs=array(
	'Rrb Temporary Flats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrbTemporaryFlats', 'url'=>array('index')),
	array('label'=>'Manage RrbTemporaryFlats', 'url'=>array('admin')),
);
?>

<h1>Create RrbTemporaryFlats</h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>