<?php	                                       			
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php	                                       			\n"; ?>
/* @var $this <?php	                                       			 echo $this->getControllerClass(); ?> */
/* @var $model <?php	                                       			 echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php	                                       			 \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>

<?php	                                       			 foreach($this->tableSchema->columns as $column): ?>
<?php	                                       			
	$field=$this->generateInputField($this->modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
?>
	<div class="row">
		<?php	                                       			 echo \$form->label(\$model,'{$column->name}'); ?>\n"; ?>
		<?php	                                       			 echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
	</div>

<?php	                                       			 endforeach; ?>
	<div class="row buttons">
		<?php	                                       			 echo CHtml::submitButton('Search'); ?>\n"; ?>
	</div>

<?php	                                       			 \$this->endWidget(); ?>\n"; ?>

</div><!-- search-form -->