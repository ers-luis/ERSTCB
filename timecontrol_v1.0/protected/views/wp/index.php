<?php
$this->breadcrumbs=array(
	'Wps',
);

$this->menu=array(
	array('label'=>'Create WP','url'=>array('create')),
	array('label'=>'Manage WP','url'=>array('admin')),
);
?>

<h1>Wps</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
