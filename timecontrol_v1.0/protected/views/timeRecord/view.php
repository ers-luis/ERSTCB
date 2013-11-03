<?php
$this->breadcrumbs=array(
	'Time Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TimeRecord','url'=>array('index')),
	array('label'=>'Create TimeRecord','url'=>array('create')),
	array('label'=>'Update TimeRecord','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TimeRecord','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimeRecord','url'=>array('admin')),
);
?>

<h1>View TimeRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'personid',
		'institutionid',
		'activityid',
		'trdate',
		'seconds',
		'description',
	),
)); ?>
