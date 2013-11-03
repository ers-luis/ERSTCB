<?php
$this->breadcrumbs=array(
	'Activity Eus'=>array('index'),
	$model->activityid,
);

$this->menu=array(
	array('label'=>'List ActivityEU','url'=>array('index')),
	array('label'=>'Create ActivityEU','url'=>array('create')),
	array('label'=>'Update ActivityEU','url'=>array('update','id'=>$model->activityid)),
	array('label'=>'Delete ActivityEU','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->activityid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActivityEU','url'=>array('admin')),
);
?>

<h1>View ActivityEU #<?php echo $model->activityid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'activityid',
		'wpid',
		'aetype',
		'aename',
	),
)); ?>
