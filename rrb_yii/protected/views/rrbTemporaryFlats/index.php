<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrb Temporary Flats',
);

$this->menu=array(
	array('label'=>'Create RrbTemporaryFlats', 'url'=>array('create')),
	array('label'=>'Manage RrbTemporaryFlats', 'url'=>array('admin')),
);
?>

<h1>Rrb Temporary Flats</h1>

<?php	                                       			 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
