<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->Id_Categoria=>array('view','id'=>$model->Id_Categoria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Registrar Categoria', 'url'=>array('create')),
	array('label'=>'View Categorias', 'url'=>array('view', 'id'=>$model->Id_Categoria)),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categorias <?php echo $model->Id_Categoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>