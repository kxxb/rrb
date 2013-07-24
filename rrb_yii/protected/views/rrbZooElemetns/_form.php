<?php
/* @var $this RrbZooElemetnsController */
/* @var $model RrbZooElemetns */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrb-zoo-elemetns-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type_name'); ?>
		<?php echo $form->textField($model,'type_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'type_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'element_id'); ?>
		<?php echo $form->textField($model,'element_id',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'element_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'element_name'); ?>
		<?php echo $form->textField($model,'element_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'element_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrb_table'); ?>
		<?php echo $form->textField($model,'rrb_table',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'rrb_table'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrb_field'); ?>
		<?php echo $form->textField($model,'rrb_field',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'rrb_field'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'rrb_replace_var'); ?>
		<?php echo $form->textField($model,'rrb_replace_var',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'rrb_replace_var'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->