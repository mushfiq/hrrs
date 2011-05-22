<?php
$this->breadcrumbs=array(
	'My Company'=>array('home'),
	'company Details'=>array('show_details'),	
	'Update',
);

include"menu.php";
?>

<h1>Update Company Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>