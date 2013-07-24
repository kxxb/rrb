<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */
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
		<?php	                                       			 echo $form->label($model,'rrb_housing_id'); ?>
		<?php	                                       			 echo $form->textField($model,'rrb_housing_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'address'); ?>
		<?php	                                       			 echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'section'); ?>
		<?php	                                       			 echo $form->textField($model,'section',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'floor_numb'); ?>
		<?php	                                       			 echo $form->textField($model,'floor_numb',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'quant_rooms_in_flat'); ?>
		<?php	                                       			 echo $form->textField($model,'quant_rooms_in_flat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'total_flat_area'); ?>
		<?php	                                       			 echo $form->textField($model,'total_flat_area',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'live_area'); ?>
		<?php	                                       			 echo $form->textField($model,'live_area',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'kitchen_area'); ?>
		<?php	                                       			 echo $form->textField($model,'kitchen_area',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'balcony_area'); ?>
		<?php	                                       			 echo $form->textField($model,'balcony_area',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'price_whoole_payment'); ?>
		<?php	                                       			 echo $form->textField($model,'price_whoole_payment',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'price_lease_payment'); ?>
		<?php	                                       			 echo $form->textField($model,'price_lease_payment',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'flat_descripton'); ?>
		<?php	                                       			 echo $form->textField($model,'flat_descripton',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'saler_name'); ?>
		<?php	                                       			 echo $form->textField($model,'saler_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'saler_contact'); ?>
		<?php	                                       			 echo $form->textField($model,'saler_contact',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'link_to_source_inf'); ?>
		<?php	                                       			 echo $form->textField($model,'link_to_source_inf',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'collect_information_dt'); ?>
		<?php	                                       			 echo $form->textField($model,'collect_information_dt',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->label($model,'report_on_phase_dt'); ?>
		<?php	                                       			 echo $form->textField($model,'report_on_phase_dt',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton('Search'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- search-form -->