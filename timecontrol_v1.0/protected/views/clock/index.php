<?php
$this->breadcrumbs=array(
	'Clocks',
);

$this->menu=array(
	array('label'=>'Create Clock','url'=>array('create')),
	array('label'=>'Manage Clock','url'=>array('admin')),
);
?>

<h1>Clocks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
