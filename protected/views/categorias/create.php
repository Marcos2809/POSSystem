<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Registrar Categoria', 'url'=>array('admin')),
);
?>

<h1>Registrar Categorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>