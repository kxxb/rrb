<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $model RrbTemporaryLoad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php	                                       			 $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'id'); ?>
		<?php	                                       			 echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'date_rec'); ?>
		<?php	                                       			 echo $form->textField($model,'date_rec'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'batch_number'); ?>
		<?php	                                       			 echo $form->textField($model,'batch_number'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'n_comon'); ?>
		<?php	                                       			 echo $form->textField($model,'n_comon',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'n_kvartal'); ?>
		<?php	                                       			 echo $form->textField($model,'n_kvartal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'report_kvartal'); ?>
		<?php	                                       			 echo $form->textField($model,'report_kvartal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'OBJECTID'); ?>
		<?php	                                       			 echo $form->textField($model,'OBJECTID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'komplex'); ?>
		<?php	                                       			 echo $form->textField($model,'komplex',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'ADDRESS'); ?>
		<?php	                                       			 echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'km_mkad'); ?>
		<?php	                                       			 echo $form->textField($model,'km_mkad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'direction'); ?>
		<?php	                                       			 echo $form->textField($model,'direction',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SUBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'SUBJECT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'KOD_OKATO'); ?>
		<?php	                                       			 echo $form->textField($model,'KOD_OKATO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Kod_cadastre'); ?>
		<?php	                                       			 echo $form->textField($model,'Kod_cadastre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SUBJECT_rayon'); ?>
		<?php	                                       			 echo $form->textField($model,'SUBJECT_rayon',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'REGION'); ?>
		<?php	                                       			 echo $form->textField($model,'REGION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SETTLEMENT'); ?>
		<?php	                                       			 echo $form->textField($model,'SETTLEMENT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CITY'); ?>
		<?php	                                       			 echo $form->textField($model,'CITY',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'VGT'); ?>
		<?php	                                       			 echo $form->textField($model,'VGT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'STREET_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'STREET_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'STREET'); ?>
		<?php	                                       			 echo $form->textField($model,'STREET',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'HOUSE_NUM'); ?>
		<?php	                                       			 echo $form->textField($model,'HOUSE_NUM',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'LETTER'); ?>
		<?php	                                       			 echo $form->textField($model,'LETTER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'BUILDING'); ?>
		<?php	                                       			 echo $form->textField($model,'BUILDING',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'STRUCTURE'); ?>
		<?php	                                       			 echo $form->textField($model,'STRUCTURE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'ESTATE'); ?>
		<?php	                                       			 echo $form->textField($model,'ESTATE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'LONGITUDE'); ?>
		<?php	                                       			 echo $form->textField($model,'LONGITUDE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'LATITUDE'); ?>
		<?php	                                       			 echo $form->textField($model,'LATITUDE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CADASTRE_NUM'); ?>
		<?php	                                       			 echo $form->textField($model,'CADASTRE_NUM',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SECTION_COUNT'); ?>
		<?php	                                       			 echo $form->textField($model,'SECTION_COUNT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'TYPE_DEVELOP'); ?>
		<?php	                                       			 echo $form->textField($model,'TYPE_DEVELOP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_DEV'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_DEV',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_ALL_OBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_ALL_OBJECT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_LOT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_LOT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'TECHNOLOGY'); ?>
		<?php	                                       			 echo $form->textField($model,'TECHNOLOGY',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'MATERIAL_WALL'); ?>
		<?php	                                       			 echo $form->textField($model,'MATERIAL_WALL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'PROJECT_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'PROJECT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'PROJECT_NUMBER'); ?>
		<?php	                                       			 echo $form->textField($model,'PROJECT_NUMBER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FLOOR_QNT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_QNT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FLOOR_QNT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_QNT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FLOOR_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CLASS_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'CLASS_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CLASS'); ?>
		<?php	                                       			 echo $form->textField($model,'CLASS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'HEIGHT_FLOOR'); ?>
		<?php	                                       			 echo $form->textField($model,'HEIGHT_FLOOR',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FINISHING_TYPE_FLAT'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_TYPE_FLAT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FINISHING_LEVEL_FLAT'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_LEVEL_FLAT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FINISHING_LEVEL_INSIDE'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_LEVEL_INSIDE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'GLAZING'); ?>
		<?php	                                       			 echo $form->textField($model,'GLAZING',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'PARKING_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'PARKING_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'PARKING_COUNT'); ?>
		<?php	                                       			 echo $form->textField($model,'PARKING_COUNT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'LIFT'); ?>
		<?php	                                       			 echo $form->textField($model,'LIFT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'ESTIMATE'); ?>
		<?php	                                       			 echo $form->textField($model,'ESTIMATE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'FENCE'); ?>
		<?php	                                       			 echo $form->textField($model,'FENCE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SECURITY'); ?>
		<?php	                                       			 echo $form->textField($model,'SECURITY',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_STUDIO'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_1'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_2'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_3'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_4'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_5'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_6'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'arae_studio_avg'); ?>
		<?php	                                       			 echo $form->textField($model,'arae_studio_avg',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_STUDIO_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_STUDIO_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_1_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_1_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_1_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_1_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_1_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_1_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_2_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_2_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_2_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_2_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_2_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_2_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_3_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_3_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_3_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_3_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_3_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_3_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_4_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_4_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_4_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_4_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_4_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_4_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_5_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_5_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_5_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_5_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_5_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_5_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_6_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_6_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_6_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_6_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_6_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_OBJECT_6_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_mnogo_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_av',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_mnogo_min'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_min',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Area_object_mnogo_max'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_max',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'QUANTITY_OBJECT_STUDIO'); ?>
		<?php	                                       			 echo $form->textField($model,'QUANTITY_OBJECT_STUDIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_4',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_5',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_6',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_object_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_mnogo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'COMMERCE_PLACE'); ?>
		<?php	                                       			 echo $form->textField($model,'COMMERCE_PLACE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'AREA_COMMERCE'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_COMMERCE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'DEVELOPER'); ?>
		<?php	                                       			 echo $form->textField($model,'DEVELOPER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CONTACTS'); ?>
		<?php	                                       			 echo $form->textField($model,'CONTACTS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'URL_INFO'); ?>
		<?php	                                       			 echo $form->textField($model,'URL_INFO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'BUILDER'); ?>
		<?php	                                       			 echo $form->textField($model,'BUILDER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Investor'); ?>
		<?php	                                       			 echo $form->textField($model,'Investor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'architect'); ?>
		<?php	                                       			 echo $form->textField($model,'architect',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'DATE_PERMIT'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_PERMIT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'NUMBER_PERMIT'); ?>
		<?php	                                       			 echo $form->textField($model,'NUMBER_PERMIT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'BEGIN_SALE'); ?>
		<?php	                                       			 echo $form->textField($model,'BEGIN_SALE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'BEGIN_BUILT'); ?>
		<?php	                                       			 echo $form->textField($model,'BEGIN_BUILT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CONST_STAGE'); ?>
		<?php	                                       			 echo $form->textField($model,'CONST_STAGE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CONST_STATUS'); ?>
		<?php	                                       			 echo $form->textField($model,'CONST_STATUS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'EXPL_PLAN'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_PLAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'EXPL_FACT'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_FACT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'impl_end'); ?>
		<?php	                                       			 echo $form->textField($model,'impl_end',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'expl_start'); ?>
		<?php	                                       			 echo $form->textField($model,'expl_start',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'delay_sheduly'); ?>
		<?php	                                       			 echo $form->textField($model,'delay_sheduly',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'EXPL_DATE'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_DATE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'EXPL_NUMBER'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_NUMBER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'INFR_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'INFR_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'CONTRACT_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'CONTRACT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'INSTALLMENT_PLAN'); ?>
		<?php	                                       			 echo $form->textField($model,'INSTALLMENT_PLAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'MORTGAGE'); ?>
		<?php	                                       			 echo $form->textField($model,'MORTGAGE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_min_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_min_object',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_object',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_max_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_max_object',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_4',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_5',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_6',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_avg_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_mnogo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_object',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_4',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_5',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_sell_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_6',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_n_rooms'); ?>
		<?php	                                       			 echo $form->textField($model,'total_n_rooms',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'koefficent'); ?>
		<?php	                                       			 echo $form->textField($model,'koefficent',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'sale_temp_kavrtal'); ?>
		<?php	                                       			 echo $form->textField($model,'sale_temp_kavrtal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'sale_temp_from_start'); ?>
		<?php	                                       			 echo $form->textField($model,'sale_temp_from_start',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'avg_flat_area'); ?>
		<?php	                                       			 echo $form->textField($model,'avg_flat_area',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_area_offer'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_whoole_price'); ?>
		<?php	                                       			 echo $form->textField($model,'total_whoole_price',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_area_offer_1r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_1r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_wh_price_1r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_1r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_area_offer_2r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_2r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_wh_price_2r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_2r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_area_offer_3r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_3r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_wh_price_3r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_3r',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_area_offer_nr'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_nr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_wh_price_nr'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_nr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'quotas'); ?>
		<?php	                                       			 echo $form->textField($model,'quotas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'update_category'); ?>
		<?php	                                       			 echo $form->textField($model,'update_category',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SOURCE_DESC'); ?>
		<?php	                                       			 echo $form->textField($model,'SOURCE_DESC',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'DATE_RESEARCH'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_RESEARCH',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'DATE_IN_BASE'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_IN_BASE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'SALE_STATUS'); ?>
		<?php	                                       			 echo $form->textField($model,'SALE_STATUS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'insert_date'); ?>
		<?php	                                       			 echo $form->textField($model,'insert_date',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'comment_text'); ?>
		<?php	                                       			 echo $form->textField($model,'comment_text',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link1'); ?>
		<?php	                                       			 echo $form->textField($model,'link1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link2'); ?>
		<?php	                                       			 echo $form->textField($model,'link2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link3'); ?>
		<?php	                                       			 echo $form->textField($model,'link3',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link4'); ?>
		<?php	                                       			 echo $form->textField($model,'link4',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link5'); ?>
		<?php	                                       			 echo $form->textField($model,'link5',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link6'); ?>
		<?php	                                       			 echo $form->textField($model,'link6',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link7'); ?>
		<?php	                                       			 echo $form->textField($model,'link7',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link8'); ?>
		<?php	                                       			 echo $form->textField($model,'link8',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link9'); ?>
		<?php	                                       			 echo $form->textField($model,'link9',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link10'); ?>
		<?php	                                       			 echo $form->textField($model,'link10',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Railway_station'); ?>
		<?php	                                       			 echo $form->textField($model,'Railway_station',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Subway_station'); ?>
		<?php	                                       			 echo $form->textField($model,'Subway_station',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_Avg_1_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_Avg_1_wo_st',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Price_Avg_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_Avg_Studio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_Sell_1_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_Sell_1_wo_st',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Quantity_Sell_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_Sell_Studio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Total_Area_Offer_1r_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Area_Offer_1r_wo_st',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Total_Wh_Price_1r_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Wh_Price_1r_wo_st',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Total_Area_Offer_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Area_Offer_Studio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Total_Wh_Price_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Wh_Price_Studio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_3',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_4',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_5',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'Seller_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_6',array('size'=>60,'maxlength'=>200)); ?>
	</div>
    
        <div class="row">
		<?php	                                       			 echo $form->label($model,'State'); ?>
		<?php	                                       			 echo $form->textField($model,'State',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton('Search'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- search-form -->