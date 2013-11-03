<?php
$this->breadcrumbs=array(
	'Time Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TimeRecord','url'=>array('index')),
	array('label'=>'Create TimeRecord','url'=>array('create')),
	array('label'=>'View TimeRecord','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TimeRecord','url'=>array('admin')),
);
?>

<h1>Update TimeRecord <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>