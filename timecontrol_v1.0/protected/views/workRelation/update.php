<?php
$this->breadcrumbs=array(
	'Work Relations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkRelation','url'=>array('index')),
	array('label'=>'Create WorkRelation','url'=>array('create')),
	array('label'=>'View WorkRelation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WorkRelation','url'=>array('admin')),
);
?>

<h1>Update WorkRelation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>