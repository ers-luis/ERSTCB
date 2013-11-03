<?php
$this->breadcrumbs=array(
	'Project Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProjectAccount','url'=>array('index')),
	array('label'=>'Create ProjectAccount','url'=>array('create')),
	array('label'=>'Update ProjectAccount','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProjectAccount','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectAccount','url'=>array('admin')),
);
?>

<h1>View ProjectAccount #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'projectid',
		'accountid',
	),
)); ?>
