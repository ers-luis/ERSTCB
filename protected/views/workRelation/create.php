<?php
$this->breadcrumbs=array(
	'Work Relations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkRelation','url'=>array('index')),
	array('label'=>'Manage WorkRelation','url'=>array('admin')),
);
?>

<h1>Create WorkRelation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>