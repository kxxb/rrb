<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $model RrbTempHnb */
/* @var $form CActiveForm */
?>

<div class="form">

<?php	                                       			 $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrb-temp-hnb-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php	                                       			 echo $form->errorSummary($model); ?>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'date_load'); ?>
		<?php	                                       			 echo $form->textField($model,'date_load'); ?>
		<?php	                                       			 echo $form->error($model,'date_load'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'hndb_name'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php	                                       			 echo $form->error($model,'hndb_name'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'hndb_key'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_key'); ?>
		<?php	                                       			 echo $form->error($model,'hndb_key'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'hndb_key_value'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_key_value',array('size'=>60,'maxlength'=>450)); ?>
		<?php	                                       			 echo $form->error($model,'hndb_key_value'); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- form -->