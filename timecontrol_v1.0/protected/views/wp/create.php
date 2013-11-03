<?php
$this->breadcrumbs=array(
	'Wps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WP','url'=>array('index')),
	array('label'=>'Manage WP','url'=>array('admin')),
);
?>

<h1>Create WP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>