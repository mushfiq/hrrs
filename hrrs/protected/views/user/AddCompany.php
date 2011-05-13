<?php
$this->breadcrumbs=array(
	'Sign Up'=>array('site/signup'),
	'Company Registration',
);

$this->menu=array(
	array('label'=>'Joob Seeker Registration', 'url'=>array('addjs')),
	array('label'=>'Sign In', 'url'=>array('site/login')),
);

$model->role=Lookup::show('role','company');
?>

<h1>Company Registration</h1>


<?php echo $this->renderPartial('signup', array('model'=>$model)); ?>