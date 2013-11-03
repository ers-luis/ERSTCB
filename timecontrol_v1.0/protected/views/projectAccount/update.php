<?php
$this->breadcrumbs=array(
	'Project Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectAccount','url'=>array('index')),
	array('label'=>'Create ProjectAccount','url'=>array('create')),
	array('label'=>'View ProjectAccount','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ProjectAccount','url'=>array('admin')),
);
?>

<h1>Update ProjectAccount <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>