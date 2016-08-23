<?php
/* @var $this CategoriasController */
/* @var $data Categorias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Categoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id_Categoria), array('view', 'id'=>$data->Id_Categoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCategoria')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCategoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Seccion')); ?>:</b>
	<?php echo CHtml::encode($data->Id_Seccion); ?>
	<br />


</div>