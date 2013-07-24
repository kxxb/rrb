<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $model RrbTemporaryLoad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php	                                       			 $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrb-temporary-load-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php	                                       			 echo $form->errorSummary($model); ?>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'date_rec'); ?>
		<?php	                                       			 echo $form->textField($model,'date_rec'); ?>
		<?php	                                       			 echo $form->error($model,'date_rec'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'batch_number'); ?>
		<?php	                                       			 echo $form->textField($model,'batch_number'); ?>
		<?php	                                       			 echo $form->error($model,'batch_number'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'n_comon'); ?>
		<?php	                                       			 echo $form->textField($model,'n_comon',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'n_comon'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'n_kvartal'); ?>
		<?php	                                       			 echo $form->textField($model,'n_kvartal',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'n_kvartal'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'report_kvartal'); ?>
		<?php	                                       			 echo $form->textField($model,'report_kvartal',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'report_kvartal'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'OBJECTID'); ?>
		<?php	                                       			 echo $form->textField($model,'OBJECTID',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'OBJECTID'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'komplex'); ?>
		<?php	                                       			 echo $form->textField($model,'komplex',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'komplex'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'ADDRESS'); ?>
		<?php	                                       			 echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'ADDRESS'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'km_mkad'); ?>
		<?php	                                       			 echo $form->textField($model,'km_mkad',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'km_mkad'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'direction'); ?>
		<?php	                                       			 echo $form->textField($model,'direction',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'direction'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SUBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'SUBJECT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SUBJECT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'KOD_OKATO'); ?>
		<?php	                                       			 echo $form->textField($model,'KOD_OKATO',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'KOD_OKATO'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Kod_cadastre'); ?>
		<?php	                                       			 echo $form->textField($model,'Kod_cadastre',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Kod_cadastre'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SUBJECT_rayon'); ?>
		<?php	                                       			 echo $form->textField($model,'SUBJECT_rayon',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SUBJECT_rayon'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'REGION'); ?>
		<?php	                                       			 echo $form->textField($model,'REGION',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'REGION'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SETTLEMENT'); ?>
		<?php	                                       			 echo $form->textField($model,'SETTLEMENT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SETTLEMENT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CITY'); ?>
		<?php	                                       			 echo $form->textField($model,'CITY',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CITY'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'VGT'); ?>
		<?php	                                       			 echo $form->textField($model,'VGT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'VGT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'STREET_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'STREET_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'STREET_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'STREET'); ?>
		<?php	                                       			 echo $form->textField($model,'STREET',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'STREET'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'HOUSE_NUM'); ?>
		<?php	                                       			 echo $form->textField($model,'HOUSE_NUM',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'HOUSE_NUM'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'LETTER'); ?>
		<?php	                                       			 echo $form->textField($model,'LETTER',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'LETTER'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'BUILDING'); ?>
		<?php	                                       			 echo $form->textField($model,'BUILDING',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'BUILDING'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'STRUCTURE'); ?>
		<?php	                                       			 echo $form->textField($model,'STRUCTURE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'STRUCTURE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'ESTATE'); ?>
		<?php	                                       			 echo $form->textField($model,'ESTATE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'ESTATE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'LONGITUDE'); ?>
		<?php	                                       			 echo $form->textField($model,'LONGITUDE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'LONGITUDE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'LATITUDE'); ?>
		<?php	                                       			 echo $form->textField($model,'LATITUDE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'LATITUDE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CADASTRE_NUM'); ?>
		<?php	                                       			 echo $form->textField($model,'CADASTRE_NUM',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CADASTRE_NUM'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SECTION_COUNT'); ?>
		<?php	                                       			 echo $form->textField($model,'SECTION_COUNT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SECTION_COUNT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'TYPE_DEVELOP'); ?>
		<?php	                                       			 echo $form->textField($model,'TYPE_DEVELOP',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'TYPE_DEVELOP'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_DEV'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_DEV',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_DEV'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_ALL_OBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_ALL_OBJECT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_ALL_OBJECT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_LOT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_LOT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_LOT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'TECHNOLOGY'); ?>
		<?php	                                       			 echo $form->textField($model,'TECHNOLOGY',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'TECHNOLOGY'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'MATERIAL_WALL'); ?>
		<?php	                                       			 echo $form->textField($model,'MATERIAL_WALL',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'MATERIAL_WALL'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'PROJECT_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'PROJECT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'PROJECT_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'PROJECT_NUMBER'); ?>
		<?php	                                       			 echo $form->textField($model,'PROJECT_NUMBER',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'PROJECT_NUMBER'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FLOOR_QNT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_QNT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FLOOR_QNT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FLOOR_QNT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_QNT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FLOOR_QNT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FLOOR_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'FLOOR_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FLOOR_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CLASS_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'CLASS_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CLASS_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CLASS'); ?>
		<?php	                                       			 echo $form->textField($model,'CLASS',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CLASS'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'HEIGHT_FLOOR'); ?>
		<?php	                                       			 echo $form->textField($model,'HEIGHT_FLOOR',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'HEIGHT_FLOOR'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FINISHING_TYPE_FLAT'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_TYPE_FLAT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FINISHING_TYPE_FLAT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FINISHING_LEVEL_FLAT'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_LEVEL_FLAT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FINISHING_LEVEL_FLAT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FINISHING_LEVEL_INSIDE'); ?>
		<?php	                                       			 echo $form->textField($model,'FINISHING_LEVEL_INSIDE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FINISHING_LEVEL_INSIDE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'GLAZING'); ?>
		<?php	                                       			 echo $form->textField($model,'GLAZING',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'GLAZING'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'PARKING_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'PARKING_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'PARKING_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'PARKING_COUNT'); ?>
		<?php	                                       			 echo $form->textField($model,'PARKING_COUNT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'PARKING_COUNT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'LIFT'); ?>
		<?php	                                       			 echo $form->textField($model,'LIFT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'LIFT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'ESTIMATE'); ?>
		<?php	                                       			 echo $form->textField($model,'ESTIMATE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'ESTIMATE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'FENCE'); ?>
		<?php	                                       			 echo $form->textField($model,'FENCE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'FENCE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SECURITY'); ?>
		<?php	                                       			 echo $form->textField($model,'SECURITY',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SECURITY'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_STUDIO'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_STUDIO'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_1'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_2'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_3'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_4'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_5'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_6'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_6'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'arae_studio_avg'); ?>
		<?php	                                       			 echo $form->textField($model,'arae_studio_avg',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'arae_studio_avg'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_STUDIO_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_STUDIO_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_STUDIO_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_STUDIO_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_STUDIO_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_1_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_1_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_1_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_1_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_1_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_1_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_1_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_1_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_1_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_1_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_1_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_1_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_2_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_2_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_2_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_2_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_2_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_2_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_2_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_2_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_2_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_2_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_2_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_2_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_3_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_3_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_3_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_3_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_3_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_3_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_3_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_3_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_3_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_3_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_3_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_3_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_4_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_4_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_4_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_4_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_4_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_4_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_4_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_4_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_4_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_4_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_4_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_4_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_5_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_5_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_5_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_5_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_5_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_5_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_5_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_5_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_5_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_5_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_5_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_5_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_6_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_6_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_6_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_6_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_6_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_6_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_6_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_6_NOT_HEAT_MIN'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_NOT_HEAT_MIN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_6_NOT_HEAT_MIN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_OBJECT_6_NOT_HEAT_MAX'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_OBJECT_6_NOT_HEAT_MAX',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_OBJECT_6_NOT_HEAT_MAX'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_mnogo'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_mnogo_av'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_av',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_mnogo_av'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_mnogo_min'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_min',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_mnogo_min'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Area_object_mnogo_max'); ?>
		<?php	                                       			 echo $form->textField($model,'Area_object_mnogo_max',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Area_object_mnogo_max'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'QUANTITY_OBJECT_STUDIO'); ?>
		<?php	                                       			 echo $form->textField($model,'QUANTITY_OBJECT_STUDIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'QUANTITY_OBJECT_STUDIO'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_4',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_5',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_6',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_6'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_object_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_object_mnogo',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_object_mnogo'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'COMMERCE_PLACE'); ?>
		<?php	                                       			 echo $form->textField($model,'COMMERCE_PLACE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'COMMERCE_PLACE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'AREA_COMMERCE'); ?>
		<?php	                                       			 echo $form->textField($model,'AREA_COMMERCE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'AREA_COMMERCE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'DEVELOPER'); ?>
		<?php	                                       			 echo $form->textField($model,'DEVELOPER',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'DEVELOPER'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CONTACTS'); ?>
		<?php	                                       			 echo $form->textField($model,'CONTACTS',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CONTACTS'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'URL_INFO'); ?>
		<?php	                                       			 echo $form->textField($model,'URL_INFO',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'URL_INFO'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'BUILDER'); ?>
		<?php	                                       			 echo $form->textField($model,'BUILDER',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'BUILDER'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Investor'); ?>
		<?php	                                       			 echo $form->textField($model,'Investor',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Investor'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'architect'); ?>
		<?php	                                       			 echo $form->textField($model,'architect',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'architect'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'DATE_PERMIT'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_PERMIT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'DATE_PERMIT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'NUMBER_PERMIT'); ?>
		<?php	                                       			 echo $form->textField($model,'NUMBER_PERMIT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'NUMBER_PERMIT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'BEGIN_SALE'); ?>
		<?php	                                       			 echo $form->textField($model,'BEGIN_SALE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'BEGIN_SALE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'BEGIN_BUILT'); ?>
		<?php	                                       			 echo $form->textField($model,'BEGIN_BUILT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'BEGIN_BUILT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CONST_STAGE'); ?>
		<?php	                                       			 echo $form->textField($model,'CONST_STAGE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CONST_STAGE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CONST_STATUS'); ?>
		<?php	                                       			 echo $form->textField($model,'CONST_STATUS',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CONST_STATUS'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'EXPL_PLAN'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_PLAN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'EXPL_PLAN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'EXPL_FACT'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_FACT',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'EXPL_FACT'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'impl_end'); ?>
		<?php	                                       			 echo $form->textField($model,'impl_end',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'impl_end'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'expl_start'); ?>
		<?php	                                       			 echo $form->textField($model,'expl_start',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'expl_start'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'delay_sheduly'); ?>
		<?php	                                       			 echo $form->textField($model,'delay_sheduly',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'delay_sheduly'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'EXPL_DATE'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_DATE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'EXPL_DATE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'EXPL_NUMBER'); ?>
		<?php	                                       			 echo $form->textField($model,'EXPL_NUMBER',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'EXPL_NUMBER'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'INFR_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'INFR_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'INFR_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'CONTRACT_TYPE'); ?>
		<?php	                                       			 echo $form->textField($model,'CONTRACT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'CONTRACT_TYPE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'INSTALLMENT_PLAN'); ?>
		<?php	                                       			 echo $form->textField($model,'INSTALLMENT_PLAN',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'INSTALLMENT_PLAN'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'MORTGAGE'); ?>
		<?php	                                       			 echo $form->textField($model,'MORTGAGE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'MORTGAGE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_min_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_min_object',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_min_object'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_object',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_object'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_max_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_max_object',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_max_object'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_4',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_5',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_6',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_6'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_avg_mnogo'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_avg_mnogo',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Price_avg_mnogo'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_object'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_object',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_object'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_4',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_5',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_sell_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_sell_6',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_sell_6'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_n_rooms'); ?>
		<?php	                                       			 echo $form->textField($model,'total_n_rooms',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_n_rooms'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'koefficent'); ?>
		<?php	                                       			 echo $form->textField($model,'koefficent',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'koefficent'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'sale_temp_kavrtal'); ?>
		<?php	                                       			 echo $form->textField($model,'sale_temp_kavrtal',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'sale_temp_kavrtal'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'sale_temp_from_start'); ?>
		<?php	                                       			 echo $form->textField($model,'sale_temp_from_start',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'sale_temp_from_start'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'avg_flat_area'); ?>
		<?php	                                       			 echo $form->textField($model,'avg_flat_area',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'avg_flat_area'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_area_offer'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_area_offer'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_whoole_price'); ?>
		<?php	                                       			 echo $form->textField($model,'total_whoole_price',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_whoole_price'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_area_offer_1r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_1r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_area_offer_1r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_wh_price_1r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_1r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_wh_price_1r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_area_offer_2r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_2r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_area_offer_2r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_wh_price_2r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_2r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_wh_price_2r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_area_offer_3r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_3r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_area_offer_3r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_wh_price_3r'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_3r',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_wh_price_3r'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_area_offer_nr'); ?>
		<?php	                                       			 echo $form->textField($model,'total_area_offer_nr',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_area_offer_nr'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_wh_price_nr'); ?>
		<?php	                                       			 echo $form->textField($model,'total_wh_price_nr',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_wh_price_nr'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'quotas'); ?>
		<?php	                                       			 echo $form->textField($model,'quotas',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'quotas'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'update_category'); ?>
		<?php	                                       			 echo $form->textField($model,'update_category',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'update_category'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SOURCE_DESC'); ?>
		<?php	                                       			 echo $form->textField($model,'SOURCE_DESC',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SOURCE_DESC'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'DATE_RESEARCH'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_RESEARCH',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'DATE_RESEARCH'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'DATE_IN_BASE'); ?>
		<?php	                                       			 echo $form->textField($model,'DATE_IN_BASE',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'DATE_IN_BASE'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'SALE_STATUS'); ?>
		<?php	                                       			 echo $form->textField($model,'SALE_STATUS',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'SALE_STATUS'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'insert_date'); ?>
		<?php	                                       			 echo $form->textField($model,'insert_date',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'insert_date'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'comment_text'); ?>
		<?php	                                       			 echo $form->textField($model,'comment_text',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'comment_text'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link1'); ?>
		<?php	                                       			 echo $form->textField($model,'link1',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link2'); ?>
		<?php	                                       			 echo $form->textField($model,'link2',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link3'); ?>
		<?php	                                       			 echo $form->textField($model,'link3',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link4'); ?>
		<?php	                                       			 echo $form->textField($model,'link4',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link5'); ?>
		<?php	                                       			 echo $form->textField($model,'link5',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link6'); ?>
		<?php	                                       			 echo $form->textField($model,'link6',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link6'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link7'); ?>
		<?php	                                       			 echo $form->textField($model,'link7',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link7'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link8'); ?>
		<?php	                                       			 echo $form->textField($model,'link8',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link8'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link9'); ?>
		<?php	                                       			 echo $form->textField($model,'link9',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link9'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link10'); ?>
		<?php	                                       			 echo $form->textField($model,'link10',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'link10'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Railway_station'); ?>
		<?php	                                       			 echo $form->textField($model,'Railway_station',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Railway_station'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Subway_station'); ?>
		<?php	                                       			 echo $form->textField($model,'Subway_station',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Subway_station'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_Avg_1_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_Avg_1_wo_st',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Price_Avg_1_wo_st'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Price_Avg_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Price_Avg_Studio',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Price_Avg_Studio'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_Sell_1_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_Sell_1_wo_st',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_Sell_1_wo_st'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Quantity_Sell_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Quantity_Sell_Studio',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Quantity_Sell_Studio'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Total_Area_Offer_1r_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Area_Offer_1r_wo_st',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Total_Area_Offer_1r_wo_st'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Total_Wh_Price_1r_wo_st'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Wh_Price_1r_wo_st',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Total_Wh_Price_1r_wo_st'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Total_Area_Offer_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Area_Offer_Studio',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Total_Area_Offer_Studio'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Total_Wh_Price_Studio'); ?>
		<?php	                                       			 echo $form->textField($model,'Total_Wh_Price_Studio',array('size'=>45,'maxlength'=>45)); ?>
		<?php	                                       			 echo $form->error($model,'Total_Wh_Price_Studio'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_1'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_1',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_1'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_2'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_2',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_2'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_3'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_3',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_3'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_4'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_4',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_4'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_5'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_5',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_5'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'Seller_6'); ?>
		<?php	                                       			 echo $form->textField($model,'Seller_6',array('size'=>60,'maxlength'=>200)); ?>
		<?php	                                       			 echo $form->error($model,'Seller_6'); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- form -->