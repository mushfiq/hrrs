<?php
$this->breadcrumbs=array(
	'My Company'=>array('./company/home'),
	'Jobs'=>array('index'),
	$model->title=>array('show','id'=>$model->id),
	'Update',
);

include"menu.php";
?>

<h1>Update '<?php echo $model->title; ?>'</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>