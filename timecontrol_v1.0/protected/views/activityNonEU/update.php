<?php
$this->breadcrumbs=array(
	'Activity Non Eus'=>array('index'),
	$model->activityid=>array('view','id'=>$model->activityid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActivityNonEU','url'=>array('index')),
	array('label'=>'Create ActivityNonEU','url'=>array('create')),
	array('label'=>'View ActivityNonEU','url'=>array('view','id'=>$model->activityid)),
	array('label'=>'Manage ActivityNonEU','url'=>array('admin')),
);
?>

<h1>Update ActivityNonEU <?php echo $model->activityid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>