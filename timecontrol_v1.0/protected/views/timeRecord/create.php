<?php
$this->breadcrumbs=array(
	'Time Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TimeRecord','url'=>array('index')),
	array('label'=>'Manage TimeRecord','url'=>array('admin')),
);
?>

<h1>Create TimeRecord</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>