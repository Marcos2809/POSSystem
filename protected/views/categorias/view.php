<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->Id_Categoria,
);

$this->menu=array(
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Registrar Categoria', 'url'=>array('create')),
	array('label'=>'Actualizar Categoria', 'url'=>array('update', 'id'=>$model->Id_Categoria)),
	array('label'=>'Eliminar Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id_Categoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Revisar Categorias #<?php echo $model->Id_Categoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreCategoria',
		'Id_Categoria',
		'Id_Seccion',
	),
)); ?>
