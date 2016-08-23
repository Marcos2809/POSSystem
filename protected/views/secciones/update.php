<?php
/* @var $this SeccionesController */
/* @var $model Secciones */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	$model->Id_Seccion=>array('view','id'=>$model->Id_Seccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secciones', 'url'=>array('index')),
	array('label'=>'Create Secciones', 'url'=>array('create')),
	array('label'=>'View Secciones', 'url'=>array('view', 'id'=>$model->Id_Seccion)),
	array('label'=>'Manage Secciones', 'url'=>array('admin')),
);
?>

<h1>Update Secciones <?php echo $model->Id_Seccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>