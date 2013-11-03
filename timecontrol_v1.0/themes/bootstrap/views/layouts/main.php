<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="author" content="Luis Bausá López" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'brand'=>'TimeControl ß',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'fluid'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Contact', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Users', 'url'=>array('/user'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'People', 'url'=>array('/person'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Projects', 'url'=>array('/project'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'WP', 'url'=>array('/wp'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Activities', 'url'=>array('/activityEu'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Time Records', 'url'=>array('/timeRecord'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Work Relations', 'url'=>array('/workRelation'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'institutions', 'url'=>array('/institution'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Bank Account', 'url'=>array('/bankAccount'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by European Research Services GmbH.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
