<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */

$this->breadcrumbs=array(
	'Rrb Temporary Flats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrbTemporaryFlats', 'url'=>array('index')),
	array('label'=>'Create RrbTemporaryFlats', 'url'=>array('create')),
	array('label'=>'Update RrbTemporaryFlats', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrbTemporaryFlats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrbTemporaryFlats', 'url'=>array('admin')),
);
?>

<h1>View RrbTemporaryFlats #<?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_rec',
		'rrb_housing_id',
		'address',
		'section',
		'floor_numb',
		'quant_rooms_in_flat',
		'total_flat_area',
		'live_area',
		'kitchen_area',
		'balcony_area',
		'price_whoole_payment',
		'price_lease_payment',
		'flat_descripton',
		'saler_name',
		'saler_contact',
		'link_to_source_inf',
		'collect_information_dt',
		'report_on_phase_dt',
	),
)); ?>
