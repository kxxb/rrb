<?php	                                       			
/**
 * This is the template for generating the form view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<div class="wide form">

<?php	                                       			 \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>

<?php	                                       			 foreach($columns as $column): ?>
<?php	                                       			
	$field=$this->generateInputField($modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
?>
	<div class="row">
		<?php	                                       			 echo \$form->label(\$model,'{$column->name}'); ?>\n"; ?>
		<?php	                                       			 echo ".$this->generateActiveField($modelClass,$column)."; ?>\n"; ?>
	</div>

<?php	                                       			 endforeach; ?>
	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton('Search'); ?>\n"; ?>
	</div>

<?php	                                       			 \$this->endWidget(); ?>\n"; ?>

</div><!-- search-form -->