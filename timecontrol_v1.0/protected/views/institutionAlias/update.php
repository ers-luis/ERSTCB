<?php
$this->breadcrumbs=array(
	'Institution Aliases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstitutionAlias','url'=>array('index')),
	array('label'=>'Create InstitutionAlias','url'=>array('create')),
	array('label'=>'View InstitutionAlias','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstitutionAlias','url'=>array('admin')),
);
?>

<h1>Update InstitutionAlias <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>