<?php
$this->breadcrumbs=array(
	'Project Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectAccount','url'=>array('index')),
	array('label'=>'Manage ProjectAccount','url'=>array('admin')),
);
?>

<h1>Create ProjectAccount</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>