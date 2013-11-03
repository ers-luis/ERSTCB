<?php
$this->breadcrumbs=array(
	'Institution Aliases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstitutionAlias','url'=>array('index')),
	array('label'=>'Create InstitutionAlias','url'=>array('create')),
	array('label'=>'Update InstitutionAlias','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstitutionAlias','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstitutionAlias','url'=>array('admin')),
);
?>

<h1>View InstitutionAlias #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institutionid',
		'aliasname',
		'aliasacronym',
	),
)); ?>
