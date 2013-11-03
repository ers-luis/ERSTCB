<?php
$this->breadcrumbs=array(
	'Work Relations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WorkRelation','url'=>array('index')),
	array('label'=>'Create WorkRelation','url'=>array('create')),
	array('label'=>'Update WorkRelation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WorkRelation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkRelation','url'=>array('admin')),
);
?>

<h1>View WorkRelation #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'personid',
		'institutionid',
		'projectid',
		'startdate',
		'enddate',
	),
)); ?>
