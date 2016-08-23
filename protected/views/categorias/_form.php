<?php
/* @var $this CategoriasController */
/* @var $model Categorias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categorias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCategoria'); ?>
		<?php echo $form->textField($model,'NombreCategoria',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NombreCategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_Seccion'); ?>
		<?php echo $form->textField($model,'Id_Seccion'); ?>
		<?php echo $form->error($model,'Id_Seccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->