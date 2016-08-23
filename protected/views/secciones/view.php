<?php
/* @var $this SeccionesController */
/* @var $model Secciones */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	$model->Id_Seccion,
);

$this->menu=array(
	array('label'=>'List Secciones', 'url'=>array('index')),
	array('label'=>'Create Secciones', 'url'=>array('create')),
	array('label'=>'Update Secciones', 'url'=>array('update', 'id'=>$model->Id_Seccion)),
	array('label'=>'Delete Secciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id_Seccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secciones', 'url'=>array('admin')),
);
?>

<h1>View Secciones #<?php echo $model->Id_Seccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Seccion',
		'Id_Seccion',
	),
)); ?>
