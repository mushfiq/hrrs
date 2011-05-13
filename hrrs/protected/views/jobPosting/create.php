<?php
$this->breadcrumbs=array(
	'My Company'=>array('./company/home'),
	'Job Post',
);

include 'menu.php';

?>

<h1>Post new job</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>