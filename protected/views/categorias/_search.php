<?php
/* @var $this CategoriasController */
/* @var $model Categorias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NombreCategoria'); ?>
		<?php echo $form->textField($model,'NombreCategoria',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_Categoria'); ?>
		<?php echo $form->textField($model,'Id_Categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_Seccion'); ?>
		<?php echo $form->textField($model,'Id_Seccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->