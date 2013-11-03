<?php
$this->breadcrumbs=array(
	'Activity Non Eus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActivityNonEU','url'=>array('index')),
	array('label'=>'Manage ActivityNonEU','url'=>array('admin')),
);
?>

<h1>Create ActivityNonEU</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>