<?php
/* @var $this RrbZooElemetnsController */
/* @var $data RrbZooElemetns */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_name')); ?>:</b>
	<?php echo CHtml::encode($data->type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_id')); ?>:</b>
	<?php echo CHtml::encode($data->element_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_name')); ?>:</b>
	<?php echo CHtml::encode($data->element_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrb_table')); ?>:</b>
	<?php echo CHtml::encode($data->rrb_table); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrb_field')); ?>:</b>
	<?php echo CHtml::encode($data->rrb_field); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('rrb_replace_var')); ?>:</b>
	<?php echo CHtml::encode($data->rrb_replace_var); ?>
	<br />



</div>