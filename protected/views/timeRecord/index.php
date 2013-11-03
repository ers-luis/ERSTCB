<?php
$this->breadcrumbs=array(
	'Time Records',
);

$this->menu=array(
	array('label'=>'Create TimeRecord','url'=>array('create')),
	array('label'=>'Manage TimeRecord','url'=>array('admin')),
);
?>

<h1>Time Records</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
