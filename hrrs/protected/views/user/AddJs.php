<?php
$this->breadcrumbs=array(
	'Sign Up'=>array('site/signup'),
	'Job Seeker Registration',
);

$this->menu=array(
	array('label'=>'Company Registration', 'url'=>array('addcompany')),
	array('label'=>'Sign In', 'url'=>array('site/login')),
);

$model->role=Lookup::show('role','js');
?>

<h1>Job Seeker Registration</h1>


<?php echo $this->renderPartial('signup', array('model'=>$model)); ?>