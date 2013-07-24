<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrb Temporary Loads',
);

$this->menu=array(
	array('label'=>'Create RrbTemporaryLoad', 'url'=>array('create')),
	array('label'=>'Manage RrbTemporaryLoad', 'url'=>array('admin')),
);
?>

<h1>Rrb Temporary Loads</h1>

<?php	                                       			 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
