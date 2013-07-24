<?php	                                       			
/* @var $this RrbTempHnbController */
/* @var $model RrbTempHnb */
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
		<?php	                                       			 echo $form->label($model,'date_load'); ?>
		<?php	                                       			 echo $form->textField($model,'date_load'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'hndb_name'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'hndb_key'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_key'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'hndb_key_value'); ?>
		<?php	                                       			 echo $form->textField($model,'hndb_key_value',array('size'=>60,'maxlength'=>450)); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton('Search'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- search-form -->