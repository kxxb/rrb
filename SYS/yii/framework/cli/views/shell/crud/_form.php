<?php	                                       			
/**
 * This is the template for generating the form view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<div class="form">

<?php	                                       			 \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php	                                       			 echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php	                                       			
foreach($columns as $column)
{
	if($column->isPrimaryKey)
		continue;
?>
	<div class="row">
		<?php	                                       			 echo ".$this->generateActiveLabel($modelClass,$column)."; ?>\n"; ?>
		<?php	                                       			 echo ".$this->generateActiveField($modelClass,$column)."; ?>\n"; ?>
		<?php	                                       			 echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>

<?php	                                       			
}
?>
	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save'); ?>\n"; ?>
	</div>

<?php	                                       			 \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->