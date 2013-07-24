<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrb Temp Hnbs',
);

$this->menu=array(
	array('label'=>'Create RrbTempHnb', 'url'=>array('create')),
	array('label'=>'Manage RrbTempHnb', 'url'=>array('admin')),
);
?>

<h1>Rrb Temp Hnbs</h1>

<?php	                                       			 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
