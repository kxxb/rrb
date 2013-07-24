<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $model RrbTempHnb */

$this->breadcrumbs=array(
	'Rrb Temp Hnbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrbTempHnb', 'url'=>array('index')),
	array('label'=>'Manage RrbTempHnb', 'url'=>array('admin')),
);
?>

<h1>Create RrbTempHnb</h1>

<?php	                                       			 echo $this->renderPartial('_form', array('model'=>$model)); ?>