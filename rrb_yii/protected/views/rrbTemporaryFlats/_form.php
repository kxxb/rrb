<?php	                                       			
/* @var $this RrbTemporaryFlatsController */
/* @var $model RrbTemporaryFlats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php	                                       			 $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrb-temporary-flats-form',
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
		<?php	                                       			 echo $form->labelEx($model,'rrb_housing_id'); ?>
		<?php	                                       			 echo $form->textField($model,'rrb_housing_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'rrb_housing_id'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'address'); ?>
		<?php	                                       			 echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'section'); ?>
		<?php	                                       			 echo $form->textField($model,'section',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'section'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'floor_numb'); ?>
		<?php	                                       			 echo $form->textField($model,'floor_numb',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'floor_numb'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'quant_rooms_in_flat'); ?>
		<?php	                                       			 echo $form->textField($model,'quant_rooms_in_flat',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'quant_rooms_in_flat'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'total_flat_area'); ?>
		<?php	                                       			 echo $form->textField($model,'total_flat_area',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'total_flat_area'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'live_area'); ?>
		<?php	                                       			 echo $form->textField($model,'live_area',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'live_area'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'kitchen_area'); ?>
		<?php	                                       			 echo $form->textField($model,'kitchen_area',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'kitchen_area'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'balcony_area'); ?>
		<?php	                                       			 echo $form->textField($model,'balcony_area',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'balcony_area'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'price_whoole_payment'); ?>
		<?php	                                       			 echo $form->textField($model,'price_whoole_payment',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'price_whoole_payment'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'price_lease_payment'); ?>
		<?php	                                       			 echo $form->textField($model,'price_lease_payment',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'price_lease_payment'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'flat_descripton'); ?>
		<?php	                                       			 echo $form->textField($model,'flat_descripton',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'flat_descripton'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'saler_name'); ?>
		<?php	                                       			 echo $form->textField($model,'saler_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'saler_name'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'saler_contact'); ?>
		<?php	                                       			 echo $form->textField($model,'saler_contact',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'saler_contact'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'link_to_source_inf'); ?>
		<?php	                                       			 echo $form->textField($model,'link_to_source_inf',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'link_to_source_inf'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'collect_information_dt'); ?>
		<?php	                                       			 echo $form->textField($model,'collect_information_dt',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'collect_information_dt'); ?>
	</div>

	<div class="row">
		<?php	                                       			 echo $form->labelEx($model,'report_on_phase_dt'); ?>
		<?php	                                       			 echo $form->textField($model,'report_on_phase_dt',array('size'=>60,'maxlength'=>100)); ?>
		<?php	                                       			 echo $form->error($model,'report_on_phase_dt'); ?>
	</div>

	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php	                                       			 $this->endWidget(); ?>

</div><!-- form -->