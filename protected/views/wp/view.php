<?php
$this->breadcrumbs=array(
	'Wps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WP','url'=>array('index')),
	array('label'=>'Create WP','url'=>array('create')),
	array('label'=>'Update WP','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WP','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WP','url'=>array('admin')),
);
?>

<h1>View WP #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'projectid',
		'wpname',
		'wpnumber',
	),
)); ?>
