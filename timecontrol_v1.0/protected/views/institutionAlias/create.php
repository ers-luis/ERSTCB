<?php
$this->breadcrumbs=array(
	'Institution Aliases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstitutionAlias','url'=>array('index')),
	array('label'=>'Manage InstitutionAlias','url'=>array('admin')),
);
?>

<h1>Create InstitutionAlias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>