<?php
$this->breadcrumbs=array(
	'Activity Eus'=>array('index'),
	$model->activityid=>array('view','id'=>$model->activityid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActivityEU','url'=>array('index')),
	array('label'=>'Create ActivityEU','url'=>array('create')),
	array('label'=>'View ActivityEU','url'=>array('view','id'=>$model->activityid)),
	array('label'=>'Manage ActivityEU','url'=>array('admin')),
);
?>

<h1>Update ActivityEU <?php echo $model->activityid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>