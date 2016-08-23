<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id_Cliente), array('view', 'id'=>$data->Id_Cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoM')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoP')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />


</div>