<?php

$posting= JobPosting::model()->findByAttributes(array('id'=>$_GET['id']));	


$this->breadcrumbs=array(
	'My Company'=>array('./company/home'),
	'Jobs'=>array('./jobposting/index'),
	$posting->title=>array('./jobposting/show','id'=>$model->id),
	'Update',
);



include"menu.php";
?>

<h1>Update '<?php echo $posting->title; ?>'</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>