<?php
$this->breadcrumbs=array(
	'Clocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clock','url'=>array('index')),
	array('label'=>'Manage Clock','url'=>array('admin')),
);
?>

<h1>Create Clock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>