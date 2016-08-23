<?php
/* @var $this SeccionesController */
/* @var $data Secciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Seccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id_Seccion), array('view', 'id'=>$data->Id_Seccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion); ?>
	<br />


</div>