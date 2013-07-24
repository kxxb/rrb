<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $data RrbTempHnb */
?>

<div class="view">

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php	                                       			 echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('date_load')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->date_load); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('hndb_name')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->hndb_name); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('hndb_key')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->hndb_key); ?>
	<br />

	<b><?php	                                       			 echo CHtml::encode($data->getAttributeLabel('hndb_key_value')); ?>:</b>
	<?php	                                       			 echo CHtml::encode($data->hndb_key_value); ?>
	<br />


</div>