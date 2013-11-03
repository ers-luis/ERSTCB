<?php
$this->breadcrumbs=array(
	'Wps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WP','url'=>array('index')),
	array('label'=>'Create WP','url'=>array('create')),
	array('label'=>'View WP','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WP','url'=>array('admin')),
);
?>

<h1>Update WP <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>