<?php
$this->breadcrumbs=array(
	'Activity Non Eus'=>array('index'),
	$model->activityid,
);

$this->menu=array(
	array('label'=>'List ActivityNonEU','url'=>array('index')),
	array('label'=>'Create ActivityNonEU','url'=>array('create')),
	array('label'=>'Update ActivityNonEU','url'=>array('update','id'=>$model->activityid)),
	array('label'=>'Delete ActivityNonEU','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->activityid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActivityNonEU','url'=>array('admin')),
);
?>

<h1>View ActivityNonEU #<?php echo $model->activityid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'activityid',
		'personid',
		'institutionid',
		'anetype',
		'anename',
	),
)); ?>
