<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id_Producto'); ?>
		<?php echo $form->textField($model,'Id_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Articulo'); ?>
		<?php echo $form->textField($model,'Articulo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrecioVenta'); ?>
		<?php echo $form->textField($model,'PrecioVenta',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Codigo'); ?>
		<?php echo $form->textField($model,'Codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_categoria'); ?>
		<?php echo $form->textField($model,'Id_categoria'); ?>
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