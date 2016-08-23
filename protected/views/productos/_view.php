<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id_Producto), array('view', 'id'=>$data->Id_Producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Articulo')); ?>:</b>
	<?php echo CHtml::encode($data->Articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrecioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->PrecioVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->Id_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Seccion')); ?>:</b>
	<?php echo CHtml::encode($data->Id_Seccion); ?>
	<br />


</div>