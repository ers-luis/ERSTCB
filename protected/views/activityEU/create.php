<?php
$this->breadcrumbs=array(
	'Activity Eus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActivityEU','url'=>array('index')),
	array('label'=>'Manage ActivityEU','url'=>array('admin')),
);
?>

<h1>Create ActivityEU</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>