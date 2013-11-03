<?php
$this->breadcrumbs=array(
	'Clocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clock','url'=>array('index')),
	array('label'=>'Create Clock','url'=>array('create')),
	array('label'=>'View Clock','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Clock','url'=>array('admin')),
);
?>

<h1>Update Clock <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>