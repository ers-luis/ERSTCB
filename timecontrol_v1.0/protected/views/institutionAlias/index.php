<?php
$this->breadcrumbs=array(
	'Institution Aliases',
);

$this->menu=array(
	array('label'=>'Create InstitutionAlias','url'=>array('create')),
	array('label'=>'Manage InstitutionAlias','url'=>array('admin')),
);
?>

<h1>Institution Aliases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
