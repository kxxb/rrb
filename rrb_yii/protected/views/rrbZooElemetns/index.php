<?php
/* @var $this RrbZooElemetnsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrb Zoo Elemetns',
);

$this->menu=array(
	array('label'=>'Create RrbZooElemetns', 'url'=>array('create')),
	array('label'=>'Manage RrbZooElemetns', 'url'=>array('admin')),
);
?>

<h1>Rrb Zoo Elemetns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
