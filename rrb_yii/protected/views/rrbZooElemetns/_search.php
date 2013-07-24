<?php
/* @var $this RrbZooElemetnsController */
/* @var $model RrbZooElemetns */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_name'); ?>
		<?php echo $form->textField($model,'type_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'element_id'); ?>
		<?php echo $form->textField($model,'element_id',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'element_name'); ?>
		<?php echo $form->textField($model,'element_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrb_table'); ?>
		<?php echo $form->textField($model,'rrb_table',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrb_field'); ?>
		<?php echo $form->textField($model,'rrb_field',array('size'=>60,'maxlength'=>200)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'rrb_replace_var'); ?>
		<?php echo $form->textField($model,'rrb_replace_var',array('size'=>60,'maxlength'=>200)); ?>
	</div>
    
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->