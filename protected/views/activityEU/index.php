<?php
$this->breadcrumbs=array(
	'Activity Eus',
);

$this->menu=array(
	array('label'=>'Create ActivityEU','url'=>array('create')),
	array('label'=>'Manage ActivityEU','url'=>array('admin')),
);
?>

<h1>Activity Eus</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
