<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $model RrbTemporaryLoad */

$this->breadcrumbs=array(
	'Rrb Temporary Loads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrbTemporaryLoad', 'url'=>array('index')),
	array('label'=>'Create RrbTemporaryLoad', 'url'=>array('create')),
	array('label'=>'Update RrbTemporaryLoad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrbTemporaryLoad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrbTemporaryLoad', 'url'=>array('admin')),
);
?>

<h1>View RrbTemporaryLoad #<?php	                                       			 echo $model->id; ?></h1>

<?php	                                       			 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_rec',
		'batch_number',
		'n_comon',
		'n_kvartal',
		'report_kvartal',
		'OBJECTID',
		'komplex',
		'ADDRESS',
		'km_mkad',
		'direction',
		'SUBJECT',
		'KOD_OKATO',
		'Kod_cadastre',
		'SUBJECT_rayon',
		'REGION',
		'SETTLEMENT',
		'CITY',
		'VGT',
		'STREET_TYPE',
		'STREET',
		'HOUSE_NUM',
		'LETTER',
		'BUILDING',
		'STRUCTURE',
		'ESTATE',
		'LONGITUDE',
		'LATITUDE',
		'CADASTRE_NUM',
		'SECTION_COUNT',
		'TYPE_DEVELOP',
		'AREA_DEV',
		'AREA_ALL_OBJECT',
		'AREA_LOT',
		'TECHNOLOGY',
		'MATERIAL_WALL',
		'PROJECT_TYPE',
		'PROJECT_NUMBER',
		'FLOOR_QNT_MIN',
		'FLOOR_QNT_MAX',
		'FLOOR_TYPE',
		'CLASS_TYPE',
		'CLASS',
		'HEIGHT_FLOOR',
		'FINISHING_TYPE_FLAT',
		'FINISHING_LEVEL_FLAT',
		'FINISHING_LEVEL_INSIDE',
		'GLAZING',
		'PARKING_TYPE',
		'PARKING_COUNT',
		'LIFT',
		'ESTIMATE',
		'FENCE',
		'SECURITY',
		'AREA_OBJECT',
		'AREA_OBJECT_STUDIO',
		'AREA_OBJECT_1',
		'AREA_OBJECT_2',
		'AREA_OBJECT_3',
		'AREA_OBJECT_4',
		'AREA_OBJECT_5',
		'AREA_OBJECT_6',
		'arae_studio_avg',
		'AREA_OBJECT_STUDIO_MIN',
		'AREA_OBJECT_STUDIO_MAX',
		'AREA_OBJECT_STUDIO_NOT_HEAT_MIN',
		'AREA_OBJECT_STUDIO_NOT_HEAT_MAX',
		'Area_object_1_av',
		'AREA_OBJECT_1_MIN',
		'AREA_OBJECT_1_MAX',
		'AREA_OBJECT_1_NOT_HEAT_MIN',
		'AREA_OBJECT_1_NOT_HEAT_MAX',
		'Area_object_2_av',
		'AREA_OBJECT_2_MIN',
		'AREA_OBJECT_2_MAX',
		'AREA_OBJECT_2_NOT_HEAT_MIN',
		'AREA_OBJECT_2_NOT_HEAT_MAX',
		'Area_object_3_av',
		'AREA_OBJECT_3_MIN',
		'AREA_OBJECT_3_MAX',
		'AREA_OBJECT_3_NOT_HEAT_MIN',
		'AREA_OBJECT_3_NOT_HEAT_MAX',
		'Area_object_4_av',
		'AREA_OBJECT_4_MIN',
		'AREA_OBJECT_4_MAX',
		'AREA_OBJECT_4_NOT_HEAT_MIN',
		'AREA_OBJECT_4_NOT_HEAT_MAX',
		'Area_object_5_av',
		'AREA_OBJECT_5_MIN',
		'AREA_OBJECT_5_MAX',
		'AREA_OBJECT_5_NOT_HEAT_MIN',
		'AREA_OBJECT_5_NOT_HEAT_MAX',
		'Area_object_6_av',
		'AREA_OBJECT_6_MIN',
		'AREA_OBJECT_6_MAX',
		'AREA_OBJECT_6_NOT_HEAT_MIN',
		'AREA_OBJECT_6_NOT_HEAT_MAX',
		'Area_object_mnogo',
		'Area_object_mnogo_av',
		'Area_object_mnogo_min',
		'Area_object_mnogo_max',
		'Quantity_object',
		'QUANTITY_OBJECT_STUDIO',
		'Quantity_object_1',
		'Quantity_object_2',
		'Quantity_object_3',
		'Quantity_object_4',
		'Quantity_object_5',
		'Quantity_object_6',
		'Quantity_object_mnogo',
		'COMMERCE_PLACE',
		'AREA_COMMERCE',
		'DEVELOPER',
		'CONTACTS',
		'URL_INFO',
		'BUILDER',
		'Investor',
		'architect',
		'DATE_PERMIT',
		'NUMBER_PERMIT',
		'BEGIN_SALE',
		'BEGIN_BUILT',
		'CONST_STAGE',
		'CONST_STATUS',
		'EXPL_PLAN',
		'EXPL_FACT',
		'impl_end',
		'expl_start',
		'delay_sheduly',
		'EXPL_DATE',
		'EXPL_NUMBER',
		'INFR_TYPE',
		'CONTRACT_TYPE',
		'INSTALLMENT_PLAN',
		'MORTGAGE',
		'Price_min_object',
		'Price_avg_object',
		'Price_max_object',
		'Price_avg_1',
		'Price_avg_2',
		'Price_avg_3',
		'Price_avg_4',
		'Price_avg_5',
		'Price_avg_6',
		'Price_avg_mnogo',
		'Quantity_sell_object',
		'Quantity_sell_1',
		'Quantity_sell_2',
		'Quantity_sell_3',
		'Quantity_sell_4',
		'Quantity_sell_5',
		'Quantity_sell_6',
		'total_n_rooms',
		'koefficent',
		'sale_temp_kavrtal',
		'sale_temp_from_start',
		'avg_flat_area',
		'total_area_offer',
		'total_whoole_price',
		'total_area_offer_1r',
		'total_wh_price_1r',
		'total_area_offer_2r',
		'total_wh_price_2r',
		'total_area_offer_3r',
		'total_wh_price_3r',
		'total_area_offer_nr',
		'total_wh_price_nr',
		'quotas',
		'update_category',
		'SOURCE_DESC',
		'DATE_RESEARCH',
		'DATE_IN_BASE',
		'SALE_STATUS',
		'insert_date',
		'comment_text',
		'link1',
		'link2',
		'link3',
		'link4',
		'link5',
		'link6',
		'link7',
		'link8',
		'link9',
		'link10',
		'Railway_station',
		'Subway_station',
		'Price_Avg_1_wo_st',
		'Price_Avg_Studio',
		'Quantity_Sell_1_wo_st',
		'Quantity_Sell_Studio',
		'Total_Area_Offer_1r_wo_st',
		'Total_Wh_Price_1r_wo_st',
		'Total_Area_Offer_Studio',
		'Total_Wh_Price_Studio',
		'Seller_1',
		'Seller_2',
		'Seller_3',
		'Seller_4',
		'Seller_5',
		'Seller_6',
                'State',
	),
)); ?>
