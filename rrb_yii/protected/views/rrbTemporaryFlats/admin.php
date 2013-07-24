<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */

$this->breadcrumbs=array(
	'Rrb Temporary Flats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RrbTemporaryFlats', 'url'=>array('index')),
	array('label'=>'Create RrbTemporaryFlats', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rrb-temporary-flats-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rrb Temporary Flats</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php	                                       			 echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php	                                       			 $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php	                                       			 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rrb-temporary-flats-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date_rec',
		'rrb_housing_id',
		'address',
		'section',
		'floor_numb',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
