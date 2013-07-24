<?php	                                       			
/* @var $this RrbTemporaryLoadController */
/* @var $data RrbTemporaryLoad */
?>

<div class="view">

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php	                                       			 echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('date_rec')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->date_rec); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('batch_number')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->batch_number); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('n_comon')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->n_comon); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('n_kvartal')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->n_kvartal); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('report_kvartal')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->report_kvartal); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('OBJECTID')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->OBJECTID); ?>
	<br />

	<?php	                                       			 /*
	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('komplex')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->komplex); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('ADDRESS')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->ADDRESS); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('km_mkad')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->km_mkad); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('direction')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->direction); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SUBJECT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SUBJECT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('KOD_OKATO')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->KOD_OKATO); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Kod_cadastre')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Kod_cadastre); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SUBJECT_rayon')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SUBJECT_rayon); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('REGION')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->REGION); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SETTLEMENT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SETTLEMENT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CITY')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CITY); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('VGT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->VGT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('STREET_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->STREET_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('STREET')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->STREET); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('HOUSE_NUM')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->HOUSE_NUM); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('LETTER')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->LETTER); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('BUILDING')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->BUILDING); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('STRUCTURE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->STRUCTURE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('ESTATE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->ESTATE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('LONGITUDE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->LONGITUDE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('LATITUDE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->LATITUDE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CADASTRE_NUM')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CADASTRE_NUM); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SECTION_COUNT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SECTION_COUNT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('TYPE_DEVELOP')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->TYPE_DEVELOP); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_DEV')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_DEV); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_ALL_OBJECT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_ALL_OBJECT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_LOT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_LOT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('TECHNOLOGY')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->TECHNOLOGY); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('MATERIAL_WALL')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->MATERIAL_WALL); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('PROJECT_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->PROJECT_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('PROJECT_NUMBER')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->PROJECT_NUMBER); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FLOOR_QNT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FLOOR_QNT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FLOOR_QNT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FLOOR_QNT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FLOOR_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FLOOR_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CLASS_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CLASS_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CLASS')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CLASS); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('HEIGHT_FLOOR')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->HEIGHT_FLOOR); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FINISHING_TYPE_FLAT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FINISHING_TYPE_FLAT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FINISHING_LEVEL_FLAT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FINISHING_LEVEL_FLAT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FINISHING_LEVEL_INSIDE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FINISHING_LEVEL_INSIDE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('GLAZING')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->GLAZING); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('PARKING_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->PARKING_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('PARKING_COUNT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->PARKING_COUNT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('LIFT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->LIFT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('ESTIMATE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->ESTIMATE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('FENCE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->FENCE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SECURITY')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SECURITY); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_STUDIO')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_STUDIO); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_6); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('arae_studio_avg')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->arae_studio_avg); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_STUDIO_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_STUDIO_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_STUDIO_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_STUDIO_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_STUDIO_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_STUDIO_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_STUDIO_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_STUDIO_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_1_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_1_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_1_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_1_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_1_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_1_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_1_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_1_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_1_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_1_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_2_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_2_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_2_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_2_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_2_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_2_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_2_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_2_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_2_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_2_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_3_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_3_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_3_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_3_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_3_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_3_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_3_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_3_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_3_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_3_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_4_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_4_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_4_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_4_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_4_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_4_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_4_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_4_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_4_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_4_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_5_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_5_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_5_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_5_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_5_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_5_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_5_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_5_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_5_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_5_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_6_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_6_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_6_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_6_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_6_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_6_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_6_NOT_HEAT_MIN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_6_NOT_HEAT_MIN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_OBJECT_6_NOT_HEAT_MAX')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_OBJECT_6_NOT_HEAT_MAX); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_mnogo')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_mnogo); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_mnogo_av')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_mnogo_av); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_mnogo_min')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_mnogo_min); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Area_object_mnogo_max')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Area_object_mnogo_max); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('QUANTITY_OBJECT_STUDIO')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->QUANTITY_OBJECT_STUDIO); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_6); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_object_mnogo')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_object_mnogo); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('COMMERCE_PLACE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->COMMERCE_PLACE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('AREA_COMMERCE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->AREA_COMMERCE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('DEVELOPER')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->DEVELOPER); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CONTACTS')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CONTACTS); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('URL_INFO')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->URL_INFO); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('BUILDER')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->BUILDER); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Investor')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Investor); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('architect')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->architect); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('DATE_PERMIT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->DATE_PERMIT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('NUMBER_PERMIT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->NUMBER_PERMIT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('BEGIN_SALE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->BEGIN_SALE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('BEGIN_BUILT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->BEGIN_BUILT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CONST_STAGE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CONST_STAGE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CONST_STATUS')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CONST_STATUS); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('EXPL_PLAN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->EXPL_PLAN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('EXPL_FACT')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->EXPL_FACT); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('impl_end')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->impl_end); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('expl_start')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->expl_start); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('delay_sheduly')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->delay_sheduly); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('EXPL_DATE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->EXPL_DATE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('EXPL_NUMBER')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->EXPL_NUMBER); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('INFR_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->INFR_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('CONTRACT_TYPE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->CONTRACT_TYPE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('INSTALLMENT_PLAN')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->INSTALLMENT_PLAN); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('MORTGAGE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->MORTGAGE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_min_object')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_min_object); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_object')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_object); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_max_object')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_max_object); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_6); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_avg_mnogo')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_avg_mnogo); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_object')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_object); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_sell_6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_sell_6); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_n_rooms')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_n_rooms); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('koefficent')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->koefficent); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('sale_temp_kavrtal')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->sale_temp_kavrtal); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('sale_temp_from_start')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->sale_temp_from_start); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('avg_flat_area')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->avg_flat_area); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_area_offer')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_area_offer); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_whoole_price')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_whoole_price); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_area_offer_1r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_area_offer_1r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_wh_price_1r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_wh_price_1r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_area_offer_2r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_area_offer_2r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_wh_price_2r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_wh_price_2r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_area_offer_3r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_area_offer_3r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_wh_price_3r')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_wh_price_3r); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_area_offer_nr')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_area_offer_nr); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('total_wh_price_nr')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->total_wh_price_nr); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('quotas')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->quotas); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('update_category')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->update_category); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SOURCE_DESC')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SOURCE_DESC); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('DATE_RESEARCH')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->DATE_RESEARCH); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('DATE_IN_BASE')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->DATE_IN_BASE); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('SALE_STATUS')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->SALE_STATUS); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('insert_date')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->insert_date); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('comment_text')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->comment_text); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link6); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link7')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link7); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link8')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link8); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link9')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link9); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('link10')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->link10); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Railway_station')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Railway_station); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Subway_station')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Subway_station); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_Avg_1_wo_st')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_Avg_1_wo_st); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Price_Avg_Studio')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Price_Avg_Studio); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_Sell_1_wo_st')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_Sell_1_wo_st); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Quantity_Sell_Studio')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Quantity_Sell_Studio); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Total_Area_Offer_1r_wo_st')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Total_Area_Offer_1r_wo_st); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Total_Wh_Price_1r_wo_st')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Total_Wh_Price_1r_wo_st); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Total_Area_Offer_Studio')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Total_Area_Offer_Studio); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Total_Wh_Price_Studio')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Total_Wh_Price_Studio); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_1')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_1); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_2')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_2); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_3')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_3); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_4')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_4); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_5')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_5); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('Seller_6')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->Seller_6); ?>
	<br />

	*/ ?>

</div>